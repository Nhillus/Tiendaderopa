<?php

namespace App\Http\Controllers;

use Cart;
use \Darryldecode\Cart\CartCondition;
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
        $Items=null;
        if ($user) {
            $icarrito = Cart::session($user->id)->getContent();
            $subtotal = Cart::session($user->id)->getSubTotal();
            //dd($subtotal);
            if(Cart::session($user->id)->getTotalQuantity()!=0)
                {
                    $Items=Cart::getContent(Auth::user()->id);
                }
        }
        else {
            $subtotal=0;
        }
        //dd( Cart::getContent($user->id));
        return view('cart/cart')->with(['Items'=>$Items ,'Subtotal'=> $subtotal]);
    }
    public function index2()
    {
        $user= Auth::user();
        $Items=null;
        if ($user) {
            $icarrito = Cart::session($user->id)->getContent();
            $subtotal = Cart::session($user->id)->getSubTotal();
            //dd($subtotal);
            if(Cart::session($user->id)->getTotalQuantity()!=0)
                {
                    $Items=Cart::getContent(Auth::user()->id);
                }
        }
        else {
            $subtotal=0;
        }
        //dd( Cart::getContent($user->id));
        return view('cart/cart2')->with(['Items'=>$Items ,'Subtotal'=> $subtotal]);
    }

    public function add(Request $request) {
        $Product = Product::find($request->Product_id);
            $user= Auth::user();
           //dd($user->id);
           //dd($Product);
           $rutaImagen = getFilesWithName(public_path(Product::SERVICES_FILES_ROUTE . '/' . $Product->id) . '/');
           $rutaImagenArreglada = ($rutaImagen[0]['fullFile']);
            
           if (($Product->offer_percent)!=0) {
            $conditionDescuento = new CartCondition(array(
                'name' => 'Descuento '.$Product->offer_percent.'%' ,
                'type' => 'decuento',
                'value' => -$Product->offer_percent.'%',
                'attributes' => array( // attributes field is optional
                    'description' => 'Descuento de promocion',
                    'more_data' => 'Decuento en el producto',
                    'precio_descuento' => $Product->offer_price
                )
            ));
            //dd($condition);
            }
            else{
                $conditionDescuento=null;
            }
            Cart::session($user->id)->add([
                'id' => $Product->id,
                'name' => $Product->title,
                'price' => $Product->real_price,
                'quantity' => 1,
                'attributes' => array($rutaImagenArreglada,$Product->shipping_days,$Product->shipping_price),
                'conditions' => $conditionDescuento,
                'associatedModel' => $Product
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
