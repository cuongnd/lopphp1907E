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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','namespace'=>"Admin"],function(){

    Route::group(['prefix' => 'san-pham'], function () {
        //root/admin/san-pham/danh-sach
        Route::get("danh-sach",['as'=>'danh-sach-san-pham','uses'=>"ProductController@getListProduct"]);

        //root/admin/san-pham/them
        Route::get("them", ['as' => 'them-san-pham', 'uses' => 'ProductController@getAddProduct']);

        //root/admin/san-pham/them
        Route::post("them", ['as' => 'post-add-product', 'uses' => 'ProductController@postAddProduct']);

        //root/admin/san-pham/sua-san-pham/3
        Route::get("sua-san-pham/{id}", ['as' => 'sua-san-pham', 'uses' => 'ProductController@getEditProduct']);

        //root/admin/san-pham/sua-san-pham/3
        Route::post("sua-san-pham/{id}", ['as' => 'post-sua-san-pham', 'uses' => 'ProductController@postEditProduct']);

    });



    //root/admin/danh-muc
    Route::group(['prefix' => 'danh-muc'], function () {
        //root/admin/danh-muc/list-danh-muc
        Route::get("list-danh-muc",['as'=>'list-danh-muc','uses'=>"CategoryController@listCategory"]);

        //root/admin/danh-muc/them-danh-muc
        Route::get("them", ['as' => 'them-danh-muc', 'uses' => 'CategoryController@getAddCategory']);

        //root/admin/danh-muc/them-danh-muc
        Route::get("sua-danh-muc/{id}", ['as' => 'sua-danh-muc', 'uses' => 'CategoryController@getEditCategory']);

        //root/admin/danh-muc/them-danh-muc
        Route::get("xoa-danh-muc/{id}", ['as' => 'xoa-danh-muc', 'uses' => 'CategoryController@getDeleteCategory']);


        //root/admin/danh-muc/post-sua-danh-muc
        Route::post('post-them-category/{id}',['as'=>"post-them-category",'uses'=>'CategoryController@postEditCategory']);
    });
});
