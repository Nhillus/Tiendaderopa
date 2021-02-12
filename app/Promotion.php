<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    /**
     * Directorio de las imagenes de las promociones
     *
     * @var string
     */
    const DIRECTORY = '/img/promotions/';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'image', 'shipping', 'offer_percent', 'offer_from', 'offer_to'
    ];

    /**
	 * Relación con las categorias
	 */
    public function categories(){
        return $this->hasMany(Category::class);
    }

    /**
     * Obtiene las promociones para la tabla
     */
    public function get(){
        $promotions = static::all();
        $result = [];

        # Recorrer resultados a mostrar
        foreach ($promotions as $promotion) {

            $result[] = [
                $promotion->title,
                $promotion->shipping,
                \date('d/m/Y g:i:s a', \strtotime($promotion->created_at)),
                '<div class="dropdown show">
                    <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Acción
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="'.route('promotions.edit', $promotion->id).'">Editar</a>
                        <button class="dropdown-item" type="button" onclick="deleteElement(\''.route('promotions.destroy', $promotion->id).'\')">
                            Eliminar
                        </button>
                    </div>
                </div>'
            ];
        }

        return $result;
    }

    /**
     * Sube la imagen de una promoción
     *
     * @param Object $promotion: Objecto de la promoción
     * @param Object $file : Objecto de la imagen
     *
     * @return void
     */
    public function uploadFile($promotion, $file){

        # Si existe el archivo
        if(null != $file){

            # Directorio a guardar el archivo
            $directory = public_path() . self::DIRECTORY . $promotion->id . '/';

            # Si existe el directorio lo eliminamos
            if(\file_exists($directory)){
                rm_dir($directory);
            }

            # Creamos directorio
            \mkdir($directory, 0777, true);

            # Nombre de la imagen
            $image = time() . '.' . $file->extension();

            # Moverimagen
            $file->move($directory, $image);

            # Nombre de la imagen
            $promotion->image = $image;

            # Actualizar
            $promotion->save();
        }
    }
}
