<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
	 * Relación con los productos
	 */
    public function products(){
        return $this->hasMany(Product::class);
    }

    /**
	 * Relación con las promociones
	 */
    public function promotion(){
        return $this->belongsTo(Promotion::class);
    }
}
