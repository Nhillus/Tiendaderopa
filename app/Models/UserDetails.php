<?php

namespace App\Models;
use Http\Models\User;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class UserDetails extends Model
{
    //
    use Notifiable;

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'saludo', 
        'primer_nombre',
        'primer_apellido', 
        'correo_eletronico',
        'idioma', 
        'pueblo_favorito'
    ];


    //Relacion 1:n con la clase SocialProvider.
    
    public function user() {
        
        return $this->hasOne(User::class);
    }

    public static function userDetails() {
        return $details = userDetails::where('user_id', '=', Auth::user()->id)->get();
    }
    
    
}
