<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function profil () {
        $data = Auth::user();
        $dataku = User::find(auth()->user())->first();
        $dataPost = Photo::where('id_user', $dataku->id)->with('likephoto')->orderBy('created_at','desc')->get();
        $following = Follow::where('id_user', auth()->user()->id)->count(); //buat following
        $followers = Follow::where('id_follow', auth()->user()->id)->count(); //buat followers
        $albums = Album::where('id_user', auth()->user()->id)->orderBy('created_at','desc')->get(); //Ini buat album
        return view('page.profil', compact('data','dataPost','dataku','following','followers','albums'));
    }

    public function viewEditProfil () {
        $data = Auth::user();
        return view('page.edit-profil', compact('data'));
    }
    // 'id_user' => auth()->user()->id, //ngefollow
    //         'id_follow' => $id //di follow

    public function editProfil(Request $request) {

        $user = Auth::user();

        if ($request->hasFile('picture')) {

            if($user->picture !== 'profile.jpeg') {
                File::delete(public_path('profileFoto/' . $user->picture));
            }

            $filename = 'Profile' . time() . '.' . $request->file('picture')->getClientOriginalExtension();
            $request->file('picture')->move('profileFoto', $filename);
            $user->picture = $filename;

        }else {
            $filename = $user->picture;
        }

        $user->username = $request->username;
        $user->alamat = $request->alamat;
        $user->bio = $request->bio;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->no_telepon= $request->no_telepon;
        $user->jenis_kelamin= $request->jenis_kelamin;
        $user->save();


            return redirect('/profil')->with('success', 'Profil berhasil di edit');
        }

        public function updatePassword(Request $request)
        {
            $user = Auth::user();
            $oldPasswordHash = $user->password;
            $enteredOldPassword = $request->passwordLama;
            if (Hash::check($enteredOldPassword, $oldPasswordHash)) {
                $newPasswordHash = bcrypt($request->passwordBaru);
                $user->password = $newPasswordHash;
                $user->save();

                return redirect()->back()->with('success', 'Password berhasil diperbarui');
            } else {
                // Password lama tidak cocok, berikan pesan kesalahan
                return redirect()->back()->with('error', 'Password lama tidak benar');
            }
        }

        public function otherProfil ($id) {
            $data = Photo::with('categories')->find($id);
            $user = User::with('photo')->where('id', $id)->first();
            $photo = Photo::where('id_user', $id)->orderBy('created_at','desc')->get();
            $following = Follow::where('id_user', auth()->user()->id)->count();
            $followers = Follow::where('id_follow', auth()->user()->id)->count();
            $userId = Auth::check() ? Auth::user()->id : null;
            $data_follow = Follow::where('id_user', Auth::user()->id)->where('id_follow', $user->id)->first();
            return view('page.other-profil', compact('data','user','photo','following','followers','data_follow'));

        }



}