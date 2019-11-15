<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','namespace'=>"Admin"],function(){



    Route::group(['prefix' => 'san-pham'], function () {
        //root/admin/san-pham/danh-sach
        Route::get("danh-sach",['as'=>'danh-sach-san-pham','uses'=>"ProductController@getListProduct"]);
        //root/admin/san-pham/them
        Route::get("them", ['as' => 'them-san-pham', 'uses' => 'ProductController@getAddProduct']);

        //root/admin/san-pham/them
        Route::post("them", ['as' => 'post-add-product', 'uses' => 'ProductController@postAddProduct']);
    });



    //root/admin/danh-muc
    Route::group(['prefix' => 'danh-muc'], function () {
        //root/admin/danh-muc/list-danh-muc
        Route::get("list-danh-muc",['as'=>'list-danh-muc','uses'=>"CategoryController@listCategory"]);
        //root/admin/danh-muc/them-danh-muc
        Route::get("them", ['as' => 'them-danh-muc', 'uses' => 'CategoryController@getAddCategory']);
    });
});
