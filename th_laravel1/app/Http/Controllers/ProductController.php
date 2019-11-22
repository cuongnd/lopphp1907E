<?php

namespace php1907e_th_laravel_1\Http\Controllers;

use Illuminate\Http\Request;
use php1907e_th_laravel_1\Product;

class ProductController extends Controller
{
    //
    public function getDetailProduct($id,Request $request){
        $product=Product::find($id);
        return view('product_detail',compact('product'));

    }
}
