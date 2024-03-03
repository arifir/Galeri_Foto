<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'deskripsi',
    ];

    protected $table = 'categories';

    public function photo(){
        return $this->hasMany(Photo::class, 'id_categories', 'id');
    }
}