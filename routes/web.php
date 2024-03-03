<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostinganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Web Route
// Route::get('/', function () {
//     return view('page.index');
// });

Route::get('/', [IndexController::class, 'index']);

Route::get('/login', function () {
    return view('page.login');
})->name('login');

Route::get('/register', function () {
    return view('page.register');
});

Route::get('/getDataExplore2', [PostinganController::class, 'getData']);

Route::get('/categories', [PostinganController::class, 'categories']);



Route::middleware('auth')->group(function(){

    Route::get('/home', [PostinganController::class, 'home']);

    Route::get('/foto-detail/{id}', [PostinganController::class, 'DetailPhoto']);

    Route::get('/add-foto', [PostinganController::class, 'ViewAddPhoto']);

    Route::get('/delete/{id}', [PostinganController::class, 'deletePost']);

    Route::get('/albums/{id}', [AlbumController::class, 'viewAlbum']);

    Route::get('/delalbums/{id}', [AlbumController::class, 'deleteAlbum']);

    Route::get('/edit-foto/{id}', [PostinganController::class, 'EditAddPhoto']);

    Route::post('/addAlbum', [AlbumController::class, 'addAlbum']);

    Route::post('/editAlbum/{id}', [AlbumController::class, 'editAlbum']);

    Route::get('/viewEditAlbum/{id}', [AlbumController::class, 'viewEditAlbum']);

    Route::get('/cateAlbums', [PostinganController::class, 'cateAlbums']);

    Route::get('/other-profil/{id}', [ProfilController::class, 'otherProfil']);

    Route::get('/viewFollowing/{id}', [FollowController::class, 'viewFollowing']);

    Route::get('/viewFollowers/{id}', [FollowController::class, 'viewFollower']);

    Route::post('/follow/{id}', [FollowController::class, 'follow']);

    Route::post('/unfollow/{id}', [FollowController::class, 'unfollow']);

    Route::post('/comments/{id}', [CommentController::class, 'addComment']);

    Route::get('/getComment/{id}', [CommentController::class, 'isiComment']);

    Route::get('/getDataExplore', [PostinganController::class, 'getData']);

    Route::get('/profil', [ProfilController::class, 'profil']);

    Route::get('/edit-profil', [ProfilController::class, 'viewEditProfil']);

    Route::get('/other-profil/{id}', [ProfilController::class, 'otherProfil']);

    Route::post('/process-edit-profil', [ProfilController::class, 'editProfil']);

    Route::post('/process-edit-password', [ProfilController::class, 'updatePassword']);

    Route::post('/AddPostingan', [PostinganController::class, 'AddPostingan']);

    Route::post('/prosesEditPhoto/{id}', [PostinganController::class, 'prosesEditPhoto']);

    // Route::get('/ReedPostingan', [PostinganController::class, 'ReedPostingan']);

    Route::get('/Logout', [AuthController::class, 'Logout']);

    Route::post('/like-post/{postId}', [LikeController::class, 'like']);





});



// End Web Route

// Controller

Route::post('/ProsesRegister', [AuthController::class, 'ProsesRegister']);

Route::post('/ProsesLogin', [AuthController::class, 'ProsesLogin']);


// End Controller
