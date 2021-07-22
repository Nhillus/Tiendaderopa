<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Promotion;
use App\Product;


class ProductController extends Controller
{
    //
    public function productIndex($id) {
        $product = Product::all()->where('id',$id);
        $category = Category::find($product->first()->category_id);
        $promotion =  Promotion::find($category->first()->promotion_id);
        return view('product/product')->with(['Product'=> $product, 'Category'=> $category, 'Promotion'=>$promotion]);
    }

}
