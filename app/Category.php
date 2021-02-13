<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'promotion_id'
    ];

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

    /**
     * Obtiene las categorías para la tabla
     */
    public function get(){
        $categories = static::all();
        $result = [];

        # Recorrer resultados a mostrar
        foreach ($categories as $category) {

            # Promocion
            $promotion = '- Sin Promoción -';

            # Si existe la promoción
            if(null != $category->promotion_id)
                $promotion = $category->promotion->title;

            $result[] = [
                $category->name,
                '<div class="badge badge-primary">'.$promotion.'</div>',
                \date('d/m/Y g:i:s a', \strtotime($category->created_at)),
                '<div class="dropdown show">
                    <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Acción
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="'.route('categories.edit', $category->id).'">Editar</a>
                        <button class="dropdown-item" type="button" onclick="deleteElement(\''.route('categories.destroy', $category->id).'\')">
                            Eliminar
                        </button>
                    </div>
                </div>'
            ];
        }

        return $result;
    }
}
