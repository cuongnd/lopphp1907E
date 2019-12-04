<?php

namespace php1907e_th_laravel_1\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use php1907e_th_laravel_1\Category;
use php1907e_th_laravel_1\Product;

class ProductController extends Controller
{
    //
    public function getDetailProduct($id,Request $request){
        $product=Product::find($id);
        return view('product_detail',compact('product'));

    }
    public function getProductsById($id,Request $request){
        $products=DB::table('products')->where('category_id','=',$id)->orderBy('sale_price')->get();
        $category=Category::find($id);
        $list_sub_category=Category::query()->where('parent','=',$category->parent)->get();
        return view('list_product',compact('category','products','list_sub_category'));
    }
}
