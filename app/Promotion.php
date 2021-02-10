<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    /**
	 * Relación con las categorias
	 */
    public function categories(){
        return $this->hasMany(Category::class);
    }
}
