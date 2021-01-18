<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use User;

class SocialProvider extends Model
{
    //Relacion inversa n:1 con la clase User.

    protected $fillable = ['provider_id','provider','avatar'];

     public function user()
    {
        return $this->belongTo(User::class);
    }

    public function userRol()
    {
        return $this->belongTo(User::class);
    }

}

