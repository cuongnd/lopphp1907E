<?php

namespace php1907e_th_laravel_1\Http\Controllers\Admin;

use Illuminate\Http\Request;
use php1907e_th_laravel_1\Http\Controllers\Controller;
use php1907e_th_laravel_1\Product;

class ProductController extends Controller
{
    //
    function getListProduct(){
        $products=Product::orderBy('id','DESC')->get();
        //todo để đây lát nữa làm
       return view('admin.product.list_product');

    }
    function getAddProduct(){
        return view('admin.product.add_new_item');
    }
}
