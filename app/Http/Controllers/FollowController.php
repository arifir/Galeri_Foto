<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Photo;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{

    //         'id_user' => auth()->user()->id, //ngefollow
    //         'id_follow' => $id //di follow

    //          'to' = di follow
    //          'from' ngefollow


    public function follow(Request $request, $id)
    {
        $user = auth()->user();
        $targetUser = User::findOrFail($id);

        $data = [
            'id_user' => auth()->user()->id,
            'id_follow' => $id
        ];
        Follow::create($data);

        return response()->json(['status' => 'followed']);
    }

    public function unfollow(Request $request, $id)
    {
        $user = auth()->user();
        $targetUser = User::findOrFail($id);

        $follow = Follow::where('id_user', $user->id)->where('id_follow', $targetUser->id)->delete();

        if ($follow) {
            return response()->json(['status' => 'unfollowed']);
        }
        return response()->json(['status' => 'not_following']);
    }

    public function viewFollower ($id) {
        $user = User::where('id', $id)->first();

        $followers = Follow::where('id_follow', $id)->orderBy('created_at', 'desc')->get();
        $followerUsers = Follow::where('id_user', Auth::user()->id)->pluck('id_follow')->toArray();

        $data_follow = Follow::where('id_follow', Auth::user()->id)->where('id_user', $user->id)->first();


        return view('page.followers', compact('followers','followerUsers'));
    }

    public function viewFollowing ($id) {

        $user = User::where('id', $id)->first();

        $followings = Follow::where('id_user', $id)->orderBy('created_at', 'desc')->get();
        $followingUsers = Follow::where('id_follow', Auth::user()->id)->pluck('id_user')->toArray();

        $data_follow = Follow::where('id_user', Auth::user()->id)->where('id_follow', $user->id)->first();

        return view('page.following', compact('followings','followingUsers','data_follow','user'));
    }


}

    //         'id_follow' => //di follow
    //         'id_user' => //ngefollow

    //          id_user =  Following
    //          id_follow = follower

    //         'to' = di follow
    //         'from' ngefollow
