<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'products_id',
    ];

    protected $guarded = 
        ['monto', 'tipoDePago','status'
    ];

    public static function buysFromUser() {
        $Compras = new Compra();
        if(Auth::check()) $Compras =  Auth::user()->compras;
        else return null;
        $lProducts = new Collection;
        foreach ($Compras as $Compra) {
           $Product = $Compra->Products;
           if ($Product) {
                $Product->setAttribute('Fecha', $Compra->value('created_at')->toDateTimeString());
                
                $Product->setAttribute('FechaFinal', $Compra->value('created_at')->addDays($Product->shipping_days)->toDateTimeString());

                $lProducts = $lProducts->push($Product); 
                //dd($cFecha);
                //dd($lProducts);
           }
        }
        //dd($lProducts->first());
        return  $lProducts;
    }

    function setMonto() {

    }
    function tipoDePago(String $tipoDePago) {
        
    }
    function status(String $status ) {
        
    }

    public function  user() {
        return $this->belongsTo(User::class);
    }
    public function  products() {
        return $this->belongsTo(Product::class);
    }
}
