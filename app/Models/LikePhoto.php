<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LikePhoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_photo'
     ];

     protected $table = 'like_photos';

     //Relasi nilai balik
     public function photo(){
         return $this->belongsTo(Photo::class, 'id_photo', 'id');
     }
}