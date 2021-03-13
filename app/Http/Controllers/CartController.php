<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user();
        if ($user) {
            $icarrito = Cart::session($user->id)->getContent();
            $subtotal = Cart::session($user->id)->getSubTotal();
            if(Cart::session($user->id)->getTotalQuantity()!=0)
                {
                    $Items=Cart::getContent(Auth::user()->id);
                    //dd($Items);
                }
            else {
                $Items=null;
                //dd($Items);
            }
        }
        else {
            $subtotal=0;
        }
        //dd( Cart::getContent($user->id));
        return view('cart/cart')->with(['Items'=>$Items ,'Subtotal'=> $subtotal]);
    }

    public function add(Request $request) {
        $Product = Product::find($request->Product_id);
            $user= Auth::user();
           //dd($user->id);
           //dd($Product);
           $rutaImagen = getFilesWithName(public_path(Product::SERVICES_FILES_ROUTE . '/' . $Product->id) . '/');
           $rutaImagenArreglada = ($rutaImagen[0]['fullFile']);

            Cart::session($user->id)->add([
                'id' => $Product->id,
                'name' => $Product->title,
                'price' => $Product->offer_price,
                'quantity' => 1,
                'attributes' => array($rutaImagenArreglada,$Product->shipping_days,$Product->shipping_price),
                'associatedModel' => $Product,
                 ]);
                //dd( Cart::getContent($user->id));
                return back()->with('success',"$Product->title !Se ha agregado con exito al carrito de compra" );
                
        
    }


    public function removeitem(Request $request) {
        $Product = Product::find($request->id);
        Cart::session(Auth::user()->id)->remove($request->id);
        return back()->with('success',"$Product->title !Se ha quitado con exito al carrito de compra" );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
