<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [] ;

    protected $table = 'comments';

    //Relasi nilai balik ke Table photo
    public function photo(){
        return $this->belongsTo(Photo::class, 'id_photo', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}