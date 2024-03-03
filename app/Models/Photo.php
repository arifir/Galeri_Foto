<?php

namespace App\Models;

use App\Models\User;
use App\Models\Album;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\LikePhoto;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_photo',
        'deskripsi',
        'url',
        'id_user',
        'id_categories',
        'id_like',
        'id_photo',
        'id_album'
    ];

    protected $table = 'photos';

    //Relasi nilai balik ke table user
    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    //Relasi ke Table likephoto
    public function likephoto(){
        return $this->hasMany(LikePhoto::class, 'id_photo', 'id');
    }

    //Relasi ke Table comment
    public function comment(){
        return $this->hasMany(Comment::class, 'id_photo', 'id');
    }

    //relasi ke table favorite
    public function favorite(){
        return $this->hasMany(Favorite::class, 'id_photo', 'id');
    }

    public function categories(){
        return $this->belongsTo(Categories::class, 'id_categories', 'id');
    }

    public function album(){
        return $this->belongsTo(Album::class, 'id_photo', 'id');
    }
}