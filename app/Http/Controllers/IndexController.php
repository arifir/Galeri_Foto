<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index () {
        $data = Photo::all();
        return view('page.index', compact('data'));
    }
}