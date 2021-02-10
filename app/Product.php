<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
	 * Relación con la categoria
	 */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
	 * Relación con la sub-categoria
	 */
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
}
