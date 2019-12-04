<?php

namespace php1907e_th_laravel_1\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use php1907e_th_laravel_1\Product;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $discount_products=DB::table('products')->orderBy('created_at')->get();
        $new_products=DB::table('products')->orderBy('sale_price')->get();

        return view('home',compact('discount_products','new_products'));
    }
}
