<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_photo'
    ];

    protected $table = 'favorites';

    //relasi nilai balik ke table favorite
    public function photo(){
        return $this->belongsTo(Photo::class, 'id_photo', 'id');
    }
}