<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Exceptions\ResponseClientException;


class Product extends Model
{
    /**
     * Contiene la ruta de subida de archivos temporal
     *
     * @var string
     */
    const SERVICES_FILES_ROUTE_TMP = 'img/tmp';

    /**
     * Contiene la ruta de subida de archivos
     *
     * @var string
     */
    const SERVICES_FILES_ROUTE = 'img/products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'category_id',
        'subcategory_id',
        'real_price',
        'offer_price',
        'offer_percent',
        'shipping_price',
        'shipping_days',
        'description'
    ];
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

    /**
     * Devuelve el directorio de assets completo
     *
     * @param string $dir : Directorio en assets
     *
     * @return string con el directorio completo
     */
    public function fullDirectory($dir){
        return \str_replace('\\', '/', public_path($dir))  . '/';
    }
    /**
     * Elimina todas las carpetas con más de 1 hora de haberse creado.
     *
     * @return void
     */
    private function deleteOldUploadHashFolders() {
        $tmp = $this->fullDirectory(self::SERVICES_FILES_ROUTE_TMP);

        $dirs = \array_slice(\scandir($tmp), 2);
        foreach($dirs as $dir) {

            if(is_dir($tmp . $dir) && (time() - (60*60)) >= filectime($tmp . $dir)) {
                rm_dir($tmp . $dir);
            }
        }

    }

    /**
     * Genera todas las carpetas necesarias para que se suban los archivos del servicio.
     *
     * @return string: Devuelve el nombre en hash de la carpeta
     */
    public function getUploadHashFolder(string $name = 'images_') : string {
        $tmp = $this->fullDirectory(self::SERVICES_FILES_ROUTE_TMP);

        # Crear directorio temporal si no existe
        if(!\is_dir($tmp)) {
            \mkdir($tmp,0777,true);
        }

        # Eliminar viejos directorios
        $this->deleteOldUploadHashFolders();

        $folder_name = $name . time();

        if(!\is_dir($tmp . $folder_name . '/')) {
            \mkdir($tmp . $folder_name .'/',0777,true);
        }

        return \base64_encode($folder_name);
    }

    /**
     * Sube los archivos a una carpeta
     *
     * @return string: Devuelve el nombre del archivo
     */
    function upload($folder, $img, $name){
        # Subir el archivo
        $img->move($folder, $name);

        # Retornar archivo
        return $name;
    }

    /**
     * Sube archivos a la carpeta temporal
     *
     * @param Request $request : Objecto de la petición
     *
     * @return array
     */
    public function uploadTmp(Request $request){
        $image = $request->image;
        $hash = \base64_decode($request->tmp_folder);
        $tmp = $this->fullDirectory(self::SERVICES_FILES_ROUTE_TMP . '/' . $hash);


        # Verificar directorio
        if (false == $hash || !\is_dir($tmp)) {
            throw new ResponseClientException('Directorio temporal inválido.');
        }

        # Verificar que hay archivos
        if (null != $image && sizeof($image) > 0) {
            $files = [];

            # Recorrer cada imagen
            foreach ($image as $index => $img) {

                $files[] = [
                    'name' => $this->upload($tmp, $img, $index . time() . '.'. $img->getClientOriginalExtension()),
                    'fullPath' => url('img/tmp/' .$hash) . '/'
                ];
            }
            //return array('success' => 1, 'message' => 'Imagenes subidas exitosamente.', 'files' => $files, 'warning' => $warning);
        }

        return [
            'success' => true,
            'message' => 'Imágenes cargadas exitosamente.',
            'files' => $files
        ];
    }

    /**
     * Elimina un archivo de la carpeta temporal
     *
     * @param Request $request : Objecto de la petición
     *
     * @return array
     */
    public function deleteFromTmp(Request $request) {
        $file_name = $request->file_name;
        $hash = \base64_decode($request->tmp);
        $tmp = $this->fullDirectory(self::SERVICES_FILES_ROUTE_TMP . '/' . $hash);

        # Si no existe la carpeta temporal
        if (false == $hash || !\is_dir($tmp))
            throw new ResponseClientException('Directorio temporal inválido.');

        # Archivo
        $file = $tmp . $file_name;

        # Verificar archivo
        if(!\file_exists($file)) {
            throw new ResponseClientException('Archivo inváido.');
        }



        \unlink($file);

        return ['success' => true ];
    }

    /**
     * Copia archivos a un directorio
     *
     * @param string $dir: Directorio a copiar
     * @param array $files: Archivos
     *
     * @return array con el nombre del archivo y el directorio
     */
    private function copyFiles($dir, $files){
        $result = [];

        foreach ($files as $f) {
            $name = \explode('/', $f);
            $name = \end($name);
            \copy($f, $dir . $name);

            $result[] = [
                'name' => $name,
                'dir' => $dir
            ];
        }

        return $result;

    }

    /**
     * Verifica los archivos temporales
     *
     * @param string $hash: Carpeta temporal encriptada
     *
     * @return array con la carpeta temporal y los archivos
     */
    public function checkFileTmp($hash){
        $hash = \base64_decode($hash);
        $tmp = $this->fullDirectory(self::SERVICES_FILES_ROUTE_TMP . '/' . $hash);

        # Si no existe la carpeta temporal
        if (false == $hash || !\is_dir($tmp))
            throw new ResponseClientException('Directorio temporal inválido.');

        # Verificar carpeta y directorio
        $files = get_files_in_dir($tmp);

        # Si no hay archivos
        if(sizeof($files) <= 0)
            throw new ResponseClientException('Debe adjuntar al menos 1 imagen.');

        return [
            'tmp' => $tmp,
            'files' => $files
        ];
    }

    /**
     * Mueve los archivos de la carpeta temporal a la carpeta real
     *
     * @param int $id: ID del producto
     * @param array $data: Datos de la carpeta temporal y los archivos
     *
     * @return void
     */
    public function uploadRealFiles(int $id, $data){
        # Directorio real
        $real_dir = $this->fullDirectory(self::SERVICES_FILES_ROUTE . '/' . $id);

        # Eliminar directorio si existe
        if(\is_dir($real_dir))
            rm_dir($real_dir);

        # Crear directorio
        \mkdir($real_dir, 0777, true);

        # Copiar achivos
        $this->copyFiles($real_dir, $data['files']);

        # Eliminar directorio temporal
        rm_dir($data['tmp']);
    }
    /**
     * Obtiene todos los productos
     *
     * @return array
     */
    public function get(){
        $products = static::all();
        $result = [];

        # Recorrer resultados a mostrar
        foreach ($products as $product) {

            $subcategory = '<div class="badge badge-warning">- Sin Sub-categoría - </div>';
            $offer_price = '- No aplica -';

            if(null != $product->id_subcategory)
                $subcategory = '<div class="badge badge-primary">'.$product->subcategory->name.'/div>';

            if(null != $product->offer_price)
                $offer_price = \number_format($product->offer_price, 2, ',', '.');

            $result[] = [
                $product->title,
                '<div class="badge badge-primary">'.$product->category->name.'</div>',
                $subcategory,
                \number_format($product->real_price, 2, '.', ','),
                $offer_price,
                \date('d/m/Y g:i:s a', \strtotime($product->created_at)),
                '<div class="dropdown show">
                    <a class="btn btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Acción
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="'.route('products.edit', $product->id).'">Editar</a>
                        <button class="dropdown-item" type="button" onclick="deleteElement(\''.route('products.destroy', $product->id).'\')">
                            Eliminar
                        </button>
                    </div>
                </div>'
            ];
        }

        return $result;
    }

    /**
     * Copia los archivos de la carpeta real a la temporal
     *
     * @param int $id : ID del producto
     * @param string $hash : Hash de la carpeta temporal
     *
     * @return array
     */
    public function copyToTmp($id, $hash){
        $real_dir = $this->fullDirectory(self::SERVICES_FILES_ROUTE . '/' . $id);
        $tmp_dir = $this->fullDirectory(self::SERVICES_FILES_ROUTE_TMP . '/' . \base64_decode($hash));

        # Obtener archivos del directorio real
        $files = \get_files_in_dir($real_dir);

        # Copiar al directorio temporal
        $this->copyFiles($tmp_dir, $files);
    }

    public function compras() {

        return $this->hasMany(Compra::class);
    }

}
