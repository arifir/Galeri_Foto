<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment(Request $request, $postId)
    {

        $post = Photo::findOrFail($postId); 

        $data_comment = [
            'id_user' => Auth::user()->id,
            'id_photo' => $postId,
            'isi_komentar' => $request->isi_komentar,
        ];

        Comment::create($data_comment);

        $jmComment = $post->count();

        return response()->json([
            'status' => 200,
            'pesan' => 'done',
            // 'countComment' => $jmComment
        ]);

    }

    public function isiComment ($id) {
        $comments = Comment::with('user')->where('id_photo', $id)->get();
        return view('include.comment',compact('comments'));

    }

}