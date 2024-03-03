<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Follow extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_follow'
     ];

     protected $table = 'follows';

     public function following(){
        return $this->belongsTo(User::class, 'id_follow', 'id');
     }

     public function follow(){
        return $this->belongsTo(User::class, 'id_user', 'id');
     }

}