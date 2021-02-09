<?php

namespace App\Models;

use App\Notifications\ResetPasswordNotification;
use App\Notifications\VerifyNotification;
use App\Traits\HasPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

use App\Models\SocialProvider;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','id_rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relacion 1:n con la clase SocialProvider.
     public function socialProvider()
    {
        return $this->hasMany(SocialProvider::class);
    }
    //Relacion 1:1 con la clase Rols
    public function rols()
    {
        return $this->belongTo(Rol::class);
    }
    public function oauth()
    {
        return $this->hasOne(OAuth::class, 'user_id');
    }
    //Relacion 1:1 con la clase UserDetails
    public function userDetails()
    {
        return $this->belongTo(userDetails::class);
    }
    //Envia la notificacion de password reset por medio de un token
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
