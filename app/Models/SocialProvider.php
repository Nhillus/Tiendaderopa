<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    //

    protected $fillable = ['provider_id','provider'];

    function user()
    {
        return $this->belongTo(User::class);
    }

}

