<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\{Category, Promotion};


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.categories.categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p = Promotion::all(['id', 'title']);
        return view('panel.categories.create')->with(['promotion' => $p]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Validaciones
        $data = $this->validate($request,[
            'name' => 'required|unique:categories,name',
            'promotion_id' => 'nullable|exists:promotions,id'
        ],[
            'required' => 'Este campo es requerido.',
            'name.unique' => 'Esta categoría ya se encuentra registrada',
            'promotion_id.exists' => 'La promoción seleccionada es inválida.'
        ]);

        # Modelo de la categoría
        $category = new Category;

        # Datos a guardar
        $category->name = $data['name'];
        $category->promotion_id = $data['promotion_id'];

        # Guardar categoría
        $category->save();

        # Respuesta
        return [
            'success' => true,
            'message' => 'Guardado exitosamente',
            'url' => route('categories.index')
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
        $category = Category::find($id);

        if(null != $category)
            return view('panel.categories.edit')->with([ 'category' => $category, 'promotion' => Promotion::all(['id', 'title']) ]);
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
        # Validaciones
        $data = $this->validate($request,[
            'name' => [
                'required',
                Rule::unique('categories', 'name')->ignore($id, 'id')
            ],
            'promotion_id' => 'nullable|exists:promotions,id'
        ],[
            'required' => 'Este campo es requerido.',
            'name.unique' => 'Esta categoría ya se encuentra registrada',
            'promotion_id.exists' => 'La promoción seleccionada es inválida.'
        ]);

        # Modelo de la categoría
        $category = Category::find($id);

        # Datos a guardar
        $category->name = $data['name'];
        $category->promotion_id = $data['promotion_id'];

        # Guardar categoría
        $category->save();

        # Respuesta
        return [
            'success' => true,
            'message' => 'Guardado exitosamente',
            'url' => route('categories.index')
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
        $category = \App\Category::find($id);
        $action = ['error' => true];

        if(null != $category){
            $action = ['success' => true];
            $category->delete();
        }


        return \response()->json(['action' => $action]);
    }
}
