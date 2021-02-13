<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id'
    ];

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

    /**
     * Obtiene las sub-categorías para la tabla
     */
    public function get(){
        $subcategories = static::all();
        $result = [];

        # Recorrer resultados a mostrar
        foreach ($subcategories as $subcategory) {




            $result[] = [
                $subcategory->name,
                '<div class="badge badge-primary">'.$subcategory->category->name.'</div>',
                \date('d/m/Y g:i:s a', \strtotime($subcategory->created_at)),
                '<div class="dropdown show">
                    <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Acción
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="'.route('subcategories.edit', $subcategory->id).'">Editar</a>
                        <button class="dropdown-item" type="button" onclick="deleteElement(\''.route('subcategories.destroy', $subcategory->id).'\')">
                            Eliminar
                        </button>
                    </div>
                </div>'
            ];
        }

        return $result;
    }
}
