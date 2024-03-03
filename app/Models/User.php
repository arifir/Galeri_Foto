<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Follow;
use App\Models\Comment;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'no_telepon',
        'jenis_kelamin',
        'alamat',
        'bio',
        'status',
        'picture',
        'email',
        'password',
        'tgl_lahir',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relasi table photo
    public function photo(){
        return $this->hasMany(Photo::class, 'id_user', 'id');
    }

    public function following(){
        return $this->hasMany(Follow::class, 'id_follow', 'id');
    }

    public function follow(){
        return $this->hasMany(Follow::class, 'id_user', 'id');
    }

    public function comment(){
        return $this->hasMany(Comment::class, 'id_user', 'id');
    }

    public function album(){
        return $this->hasMany(Album::class, 'id_photo', 'id');
    }
}