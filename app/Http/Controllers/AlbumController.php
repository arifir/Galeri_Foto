<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AlbumController extends Controller
{


        public function viewAlbum ($id) {
            $view = Album::find($id);
            $albumview = Photo::where('id_album', $id)->get();
            $user = Auth::user()->id;
            // return $view;
            return view('page.album', compact('view','user','albumview'));
        }

        public function viewEditAlbum ($id) {
            $data = Album::find($id);
            $user = Auth::user()->id;
            return view('page.edit-album', compact('data','user'));
        }

        public function addAlbum (Request $request){
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required|mimes:jpeg,png,jpg'

        ]);

        $foto_file = $request->file('cover');
        $foto_extention = $foto_file->extension();
        $foto_nama  = date('dmyhis').'.'.$foto_extention;
        $foto_file->move(public_path('/album'), $foto_nama);

        $data = [
            'cover' => $foto_nama,
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'id_user'   => auth()->user()->id,

        ];

        $validate = Album::create($data);

        if($validate == true){
            return redirect('/profil')->with('success', 'Album berhasil dibuat');
        } else {
            return redirect()->back();
        }
    }

    public function editAlbum(Request $request, $id) {


        $id = Album::find($id);
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required|mimes:png,jpg,jpeg'
        ]);

        $album = Album::find($id)->where('id_user', Auth::user()->id)->first();

        if (!$album) {
        return redirect()->back()->with('error', 'Album tidak ditemukan');
        }

        if ($request->hasFile('cover')) {
            $filefoto = $request->file('cover');
            $extensiFile = $filefoto->getClientOriginalExtension();
            date_default_timezone_set('Asia/Jakarta');
            $cover = $request->name. '-' . date('d_m_Y_H_i_s'). '-' . $extensiFile;
            $filefoto->move(public_path('album/'), $cover);

            File::delete(public_path('album/'. $album->cover));
            // Hapus file lama jika ada
        } else {
            $cover = $request->coverLama;
        }

            $data = [
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
                'cover' => $cover
            ];

            $validate = $album->update($data);

            return redirect()->back()->with('success', 'Album berhasil di edit');

        }


    public function deleteAlbum ($id){

        $data = Album::find($id);
        $data->delete();
        return redirect('/profil')->with('success', 'Album berhasil di hapus');

    }
}