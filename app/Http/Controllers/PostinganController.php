<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Follow;
use App\Models\Comment;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostinganController extends Controller
{
    //View Page Home
    public function home () {
        $data = Photo::all();
        return view('page.home', compact('data'));
    }
    //End View Page Home

    //View Page Detail Photo
    public function DetailPhoto ($id) {
        $data = Photo::with('categories')->find($id);
        $userId = Auth::check() ? Auth::user()->id : null;
        $follow = Follow::where('id_user', $userId)->pluck('id_follow')->toArray();
        $isFollowing = in_array($data->id_user, $follow);
        return view('page.foto-detail', compact('data','isFollowing'));
    }
    //End View Page Detail Photo

    public function EditPhoto ($id) {
        $data = Photo::with('categories')->find($id);
        $userId = Auth::check() ? Auth::user()->id : null;
        // $checkFollow = Follow::where('id_follow', $data->user->id)->where('id_user', auth()->user()->id)->first();
        $follow = Follow::where('id_user', $userId)->pluck('id_follow')->toArray();
        $isFollowing = in_array($data->id_user, $follow);
        return view('page.foto-detail', compact('data','isFollowing'));
    }

    public function EditAddPhoto ($id) {
        $data = Photo::find($id);
        $dataCategori = Categories::all();
        $dataAlbums = Album::where('id_user', auth()->user()->id)->get();
        return view('page.edit-foto', compact('dataCategori','dataAlbums','data'));
    }

    public function prosesEditPhoto (Request $request, $id) {

        $data = Photo::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Foto tidak ditemukan');
        }

        $request->validate([
            'judul_photo' => 'required',
            'deskripsi' => 'required',
            'id_categories' => 'required',
        ]);

            $data->judul_photo = $request->judul_photo;
            $data->deskripsi = $request->deskripsi;
            $data->id_album = $request->id_album;
            $data->id_categories = $request->id_categories;
            $data->save();

            return redirect()->back()->with('success', 'Postingan berhasil di edit');

    }

    public function ViewAddPhoto () {
        $dataCategori = Categories::all();
        $dataAlbums = Album::where('id_user', auth()->user()->id)->get();
        return view('page.add-foto', compact('dataCategori','dataAlbums'));
    }

    //Fitur Scroll controller
    public function getData (Request $request) {
        try {
                // $cari = $request->cari;
                if($request->cari !== 'null'){
                    $explore = Photo::with(['categories','likephoto','comment'])->withCount(['likephoto','comment','categories'])->where('judul_photo','like','%'.$request->cari.'%')->orderBy('created_at', 'desc')->paginate(3);

                } else {
                    $explore = Photo::with(['categories','likephoto','comment'])->withCount(['likephoto','comment','categories'])->orderBy('created_at', 'desc')->paginate(3);
                }


            return response()->json(
                [
                    'data' => $explore,
                    'statuscode' => 200
                ]
            );
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occured while processing the request.',
                'statuscode' => 500
            ]);
        }
    }

    //Add Postingan
    public function AddPostingan (Request $request){

        $request->validate([
            'judul_photo' => 'required',
            'deskripsi' => 'required',
            'url' => 'required|mimes:jpeg,png,jpg'
        ]);

        $foto_file = $request->file('url');
        $foto_extention = $foto_file->extension();
        $foto_nama  = date('dmyhis').'.'.$foto_extention;
        $foto_file->move(public_path('/foto'), $foto_nama);

        $data = [
            'judul_photo' => $request->judul_photo,
            'deskripsi' => $request->deskripsi,
            'url' => $foto_nama,
            'id_user'   => Auth::user()->id,
            'id_categories' => $request->id_categories,
            'id_album' => $request->id_album
        ];

        Photo::create($data);
        // return redirect('/add-foto')->with('success', 'Postingan telah di upload');

        if($data == true){
            return redirect('/profil')->with('success', 'Postingan telah di upload');
        } else {
            return redirect()->back();
        }
    }
    //End Add Postingan

    public function deletePost ($id){
        $data = Photo::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Postingan berhasil di hapus');

    }

    public function search(Request $request) {
        if($request->has('search')) {
            $photoSearch = Photo::where('judul_photo','LIKE','%'.$request->search.'%')->get();
        } else {
            $photoSearch = Photo::all();
        }

        return view('page.home',['photoSearch'=>'$photoSearch']);
    }

}