<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserDetails extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'saludo', 'primer_nombre', 'primer_apellido', 
        'correo_eletronico', 'idioma', 'pueblo_favorito'
    ];


    //Relacion 1:n con la clase SocialProvider.
    
    public function user()
    {
        return $this->hasOne(User::class);
    }

    
}
