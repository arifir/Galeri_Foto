<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register
    public function ProsesRegister (Request $request){
        $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'username' => 'required',

        ]);
        $profil = 'profile.jpeg';

        $dataRegister =[
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username' => $request->username,
            'picture' => $profil
        ];

        $validate = User::create($dataRegister);

        if($validate == true){
            return redirect('/register')->with('success', 'Data berhasil di simpan');
        } else {
            return redirect()->back();
        }

    }
    // End Register

     // Login

     public function ProsesLogin (Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/home')->with('success', 'Berhasil Login!');
        } else {
            return redirect()->back()->with('error','Email atau Password salah!');
        }

    }

    // End Login

    // Logout

    public function Logout (Request $request){
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/')->with('info', 'Anda telah logout');

    }

    // End Logout
}