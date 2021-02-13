<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules;
use Illuminate\Validation\Rule;
use App\{Category, Product};

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.products.products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product;
        return view('panel.products.create')->with([
            'category' => Category::all(),
            'hash' => $product->getUploadHashFolder()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        # validaciones
        $data = $this->validate($request, [
            'title' => 'required|unique:products,title',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => ['nullable','exists:subcategories,id', new Rules\InRelation('subcategories', 'category_id')],
            'real_price' => 'required|numeric|min:0',
            'offer_price' => 'nullable|numeric|min:0',
            'offer_percent' => 'nullable|numeric|min:0',
            'shipping_price' => 'nullable|numeric|min:0',
            'shipping_days' => 'nullable|numeric|min:1',
            'description' => 'required',
        ],[
            'required' => 'Este campo es requerido.',
            'category_id.exists' => 'La categoría seleccinada es inválida.',
            'subcategory_id.exists' => 'La sub-categoría seleccinada es inválida.',
            'numeric' => 'Este valor debe ser numérico.',
            'min' => 'Este valor no puede ser menor a :min.'
        ]);


        # Modelo de los productos
        $product = new Product;

        # Verificar directorio temporal
        $tmp = $product->checkFileTmp($request->get('hash'));

        # Datos a guardar
        $product->title = $data['title'];
        $product->category_id = $data['category_id'];
        $product->subcategory_id = $data['subcategory_id'];
        $product->real_price = $data['real_price'];
        $product->offer_price = percentOfValue($data['real_price'], $data['offer_percent']);
        $product->offer_percent = $data['offer_percent'];
        $product->shipping_price = $data['shipping_price'];
        $product->shipping_days = $data['shipping_days'];
        $product->description = $data['description'];

        # Guardar
        $product->save();

        # Subir archivos
        $product->uploadRealFiles($product->id, $tmp);

        # Respuesta
        return [
            'success' => true,
            'message' => 'Guardado exitosamente',
            'url' => route('products.index')
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        if(null != $product){
            $hash = $product->getUploadHashFolder();
            $product->copyToTmp($product->id, $hash);

            $files = getFilesWithName(public_path(Product::SERVICES_FILES_ROUTE . '/' . $id) . '/');

            return view('panel.products.edit')->with([
                'product' => $product,
                'category' => Category::all(),
                'hash' => $hash,
                'files' => $files
            ]);
        }
        else
            return redirect()->route('categories.index');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        # validaciones
        $data = $this->validate($request, [
            'title' => [
                'required',
                Rule::unique('subcategories', 'name')->ignore($id, 'id')
            ],
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => ['nullable','exists:subcategories,id', new Rules\InRelation('subcategories', 'category_id')],
            'real_price' => 'required|numeric|min:0',
            'offer_price' => 'nullable|numeric|min:0',
            'offer_percent' => 'nullable|numeric|min:0',
            'shipping_price' => 'nullable|numeric|min:0',
            'shipping_days' => 'nullable|numeric|min:1',
            'description' => 'required',
        ],[
            'required' => 'Este campo es requerido.',
            'category_id.exists' => 'La categoría seleccinada es inválida.',
            'subcategory_id.exists' => 'La sub-categoría seleccinada es inválida.',
            'numeric' => 'Este valor debe ser numérico.',
            'min' => 'Este valor no puede ser menor a :min.'
        ]);


        # Modelo de los productos
        $product = Product::find($id);

        # Verificar directorio temporal
        $tmp = $product->checkFileTmp($request->get('hash'));

        # Datos a guardar
        $product->title = $data['title'];
        $product->category_id = $data['category_id'];
        $product->subcategory_id = $data['subcategory_id'];
        $product->real_price = $data['real_price'];

        $product->offer_price = null != $data['offer_price'] ? percentOfValue($data['real_price'], $data['offer_percent']) : $data['offer_price'];

        $product->offer_percent = $data['offer_percent'];
        $product->shipping_price = $data['shipping_price'];
        $product->shipping_days = $data['shipping_days'];
        $product->description = $data['description'];

        # Guardar
        $product->save();

        # Subir archivos
        $product->uploadRealFiles($product->id, $tmp);

        # Respuesta
        return [
            'success' => true,
            'message' => 'Guardado exitosamente',
            'url' => route('products.index')
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::find($id);
        $action = ['error' => true];

        if(null != $product){
            $dir = public_path(Product::SERVICES_FILES_ROUTE . '/' . $id) . '/';

            if(\is_dir($dir))
                rm_dir($dir);

            $action = ['success' => true];
            $product->delete();

        }


        return \response()->json(['action' => $action]);
    }
}
