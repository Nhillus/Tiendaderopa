<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Category;
use App\Promotion;
use App\Product;

class ProductListController extends Controller
{
    //
    public function index($id)
    {
        $categoris = Category::all()->where('promotion_id',$id);  
                if ($categoris) {
                    //dd($categories);
                   //$products= new Product;
                   $CollectProducts = new Collection;
                   $numeroP = 0;
                    foreach($categoris as $category)
                    {   
                        echo($category->id);
                        $Products =  Product::all()->where('category_id',$category->id);
                        //dd($Products);
                        foreach($Products as $Product)
                        {
                            $numeroP = $numeroP + 1;
                            $rutaImagen = getFilesWithName(public_path(Product::SERVICES_FILES_ROUTE . '/' . $Product->id) . '/');
                            $rutaImagenArreglada = ($rutaImagen[0]['fullFile']);
                            $Product->setAttribute('Imagen',$rutaImagenArreglada );
                            
                        }
                        if ($Products->isNotEmpty()) {

                            //dd($Product->Imagen[0]);
                        $CollectProducts = $CollectProducts->push($Products);
                        }
                    }
                    //dd($CollectProducts->all());
                    $unidoCollectProducts= $CollectProducts->collapse();
                    //dd($unidoCollectProducts->all());
                    $promotion = Promotion::findOrFail($id);
                    //$url = $promotion->getImage($id, $promotion->image);
                    //dd($url);
                    //$img = get_files_in_dir(asset("/img/products/1") . '/');
                    //dd(asset('/img/products/1/'));
                    
                    //$arrayImg = array();
                     //foreach($unidoCollectProducts as $unidoCollectProduct )
                     //{  $img = get_files_in_dir(public_path(Product::SERVICES_FILES_ROUTE . '/' . $unidoCollectProduct->id) . '/');
                        //$img = fullDirectory(Product::SERVICES_FILES_ROUTE . '/' . $unidoCollectProduct->id);
                       // dd($img);
                     //}
                     //dd($arrayImg[1][0]);

                  


                }
        //$Products = \App\Product::all();
        $Promotion = Promotion::find($id);
        //dd($Promotion);
        return view('/products/listProducts')->with(['Products'=> $unidoCollectProducts, 'Promotion'=> $Promotion, 'TotalArticulos'=>$numeroP ]);
    }

    public function mostrarLista($id) {
        
        $promotion = Promotion::findOrFail($id);  
                if ($promotion)dd($promotion);
    }
}
