<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // use Notifiable;

    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    protected $table = 'user';
    public $timestamps = false;
    protected $fillable = [
        'username',
        'email',
        'password',
        'path',
        'token',
        'token_created_at',
        'role',
    ];

    public function vanban()
    {
        return $this->hasMany(VanBan::class, 'id_user');
    }

    public function tintuc()
    {
        return $this->hasMany(TinTuc::class, 'id_user');
    }
}
