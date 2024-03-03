<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request, $postId){
        $post = Photo::findOrFail($postId);
        $liked = $post->likephoto()->where('id_user', auth()->id())->exists();

        if ($liked) {
            $post->likephoto()->where('id_user', auth()->id())->delete();
        } else {
            $post->likephoto()->create(['id_user' => auth()->id()]);
        }
        $jmLike = $post->likephoto()->count();

        return response()->json([
            'liked' => !$liked,
            'countLike'=> $jmLike,
        ]);
    }
}
