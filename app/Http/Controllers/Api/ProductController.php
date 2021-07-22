<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{

    public function index(Request $request)
    {
        $product = Product::all();
        return $product;
        //Esta función nos devolvera todas los productos que tenemos en nuestra BD
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;

        $product->save();
        //Esta función guardará los productos que enviaremos mediante vuejs
    }
    public function show(Request $request)
    {
        $product = Product::findOrFail($request->id);
        return $product;
        //Esta función devolverá los datos de una productos que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function update(Request $request)
    {
        $product = Product::findOrFail($request->id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;

        $product->save();

        return $product;
        //Esta función actualizará la productos que hayamos seleccionado
       
    }

    public function destroy(Request $request)
    {
        $product = Product::destroy($request->id);
        return $product;
        //Esta función obtendra el id del producto que hayamos seleccionado y la borrará de nuestra BD
    }
}