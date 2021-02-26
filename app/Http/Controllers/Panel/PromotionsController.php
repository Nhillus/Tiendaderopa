<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Promotion;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.promotions.promotions');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.promotions.create');
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
            'title' => 'required|string',
            'shipping' => 'nullable',
            'offer_percent' => 'nullable|numeric',
            'offer_time' => 'nullable',
            'description' => 'required',
            'image_promotion' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ],[
            'required' => 'Este campo es requerido.',
            'image_promotion.image' => 'Debe subir una imagen.',
            'image_promotion.mimes' => 'La imagen debe ser tipo :values.',
            'image_promotion.max' => 'La imagen no puede superar los :max kilobytes.'
        ]);

        # Converti el tiempo en unix
        $offer_time = getTimeOffer($data['offer_time']);

        # Modelo
        $promotion = new Promotion;

        # Datos a guardar
        $promotion->title = $data['title'];
        $promotion->shipping = $data['shipping'];
        $promotion->offer_percent = $data['offer_percent'];

        # Si existe el tiempo de oferta
        if (null != $offer_time) {
            $promotion->offer_from = $offer_time['offer_from'];
            $promotion->offer_to = $offer_time['offer_to'];
        }

        $promotion->description = \nl2br($data['description']);

        # Guardar
        $promotion->save();

        # Subir imagen
        $promotion->uploadFile($promotion, $request->image_promotion);

        return [
            'success' => true,
            'message' => 'Guardado exitosamente',
            'url' => route('promotions.index')
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
    public function find($id) {
        
        $promotion = Promotion::findOrFail($id);  
                if ($promotion)dd($promotion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotion = Promotion::find($id);

        if(null != $promotion){

            # Rango de fecha
            $promotion->offer_time = $promotion->offer_range(
                $promotion->offer_from,
                $promotion->offer_to
            );

            # imagen
            $promotion->image = $promotion->getImage($promotion->id, $promotion->image);

            return view('panel.promotions.edit')->with([ 'promotion' => $promotion ]);
        }
        else
            return redirect()->route('promotions.index');
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
            'title' => 'required|string',
            'shipping' => 'nullable',
            'offer_percent' => 'nullable|numeric',
            'offer_time' => 'nullable',
            'description' => 'required',
            'image_promotion' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ],[
            'required' => 'Este campo es requerido.',
            'image_promotion.image' => 'Debe subir una imagen.',
            'image_promotion.mimes' => 'La imagen debe ser tipo :values.',
            'image_promotion.max' => 'La imagen no puede superar los :max kilobytes.'
        ]);

        # Converti el tiempo en unix
        $offer_time = getTimeOffer($data['offer_time']);

        # Modelo
        $promotion = Promotion::find($id);

        # Datos a guardar
        $promotion->title = $data['title'];
        $promotion->shipping = $data['shipping'];
        $promotion->offer_percent = $data['offer_percent'];

        # Si existe el tiempo de oferta
        if (null != $offer_time) {
            $promotion->offer_from = $offer_time['offer_from'];
            $promotion->offer_to = $offer_time['offer_to'];
        }

        $promotion->description = \nl2br($data['description']);

        # Guardar
        $promotion->save();

        # Subir imagen
        $promotion->uploadFile($promotion, $request->image_promotion);

        return [
            'success' => true,
            'message' => 'Guardado exitosamente',
            'url' => route('promotions.index')
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
        $promotion = \App\Promotion::find($id);
        $action = ['error' => true];

        if(null != $promotion){
            $action = ['success' => true];
            rm_dir(public_path() . '/'. Promotion::DIRECTORY . $id . '/');
            $promotion->delete();
        }


        return \response()->json(['action' => $action]);
    }
}
