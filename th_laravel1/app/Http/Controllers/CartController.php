<?php

namespace php1907e_th_laravel_1\Http\Controllers;

use Illuminate\Http\Request;
use \Cart;
use php1907e_th_laravel_1\Product;

class CartController extends Controller
{
    //
    public function index(){
        return view("cart");
    }
    public function postAddTocart($id,Request $request){
        $product=Product::find($id);
        $post=$request->all();
        $price=$product->price;
        if($product->sale_product){
            $price=$product->sale_product;
        }
        Cart::add($id,$product->product_name,$post['quality'],$price);
        return redirect(route('gio-hang'));

    }
}
