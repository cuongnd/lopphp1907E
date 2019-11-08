<?php

namespace php1907e_th_laravel_1\Http\Controllers\Admin;

use Illuminate\Http\Request;
use php1907e_th_laravel_1\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    function listCategory(){
        return view('admin.category.list_category');
    }
}
