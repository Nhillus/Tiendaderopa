<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    /**
	 * Relación con los productos
	 */
    public function products(){
        return $this->hasMany(Product::class);
    }

    /**
	 * Relación con las categorias
	 */
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
