<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use RobertHucks\SelfDestruct\Traits\SelfDestruct;

class Rol extends Model
{
    use SelfDestruct;

    protected $life_time = 60;
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
