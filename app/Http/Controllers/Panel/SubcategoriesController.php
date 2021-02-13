<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\{Subcategory, Category};

class SubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.subcategories.subcategories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $c = Category::all(['id', 'name']);
        return view('panel.subcategories.create')->with(['category' => $c]);
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
            'name' => 'required|unique:subcategories,name',
            'category_id' => 'required|exists:categories,id'
        ],[
            'required' => 'Este campo es requerido.',
            'name.unique' => 'Esta sub-categoría ya se encuentra registrada',
            'category_id.exists' => 'La categoría seleccionada es inválida.'
        ]);

        # Modelo de la sub-categoría
        $subcategory = new Subcategory;

        # Datos a guardar
        $subcategory->name = $data['name'];
        $subcategory->category_id = $data['category_id'];

        # Guardar categoría
        $subcategory->save();

        # Respuesta
        return [
            'success' => true,
            'message' => 'Guardado exitosamente',
            'url' => route('subcategories.index')
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
        $subcategory = Subcategory::find($id);

        if(null != $subcategory)
            return view('panel.subcategories.edit')->with([ 'subcategory' => $subcategory, 'category' => Category::all(['id', 'name']) ]);
        else
            return redirect()->route('subcategories.index');
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
                Rule::unique('subcategories', 'name')->ignore($id, 'id')
            ],
            'category_id' => 'required|exists:categories,id'
        ],[
            'required' => 'Este campo es requerido.',
            'name.unique' => 'Esta sub-categoría ya se encuentra registrada',
            'category_id.exists' => 'La categoría seleccionada es inválida.'
        ]);

        # Modelo de la sub-categoría
        $subcategory = Subcategory::find($id);

        # Datos a guardar
        $subcategory->name = $data['name'];
        $subcategory->category_id = $data['category_id'];

        # Guardar categoría
        $subcategory->save();

        # Respuesta
        return [
            'success' => true,
            'message' => 'Guardado exitosamente',
            'url' => route('subcategories.index')
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
        $subcategory = \App\Subcategory::find($id);
        $action = ['error' => true];

        if(null != $subcategory){
            $action = ['success' => true];
            $subcategory->delete();
        }


        return \response()->json(['action' => $action]);
    }
}
