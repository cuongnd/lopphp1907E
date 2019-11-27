<?php

namespace php1907e_th_laravel_1;

use Illuminate\Database\Eloquent\Model;
use DB;
class Orders extends Model
{
    //
    public  static function getAllProductByOrderId($id){
        $list_product = DB::table('order_product')->select("*")->where('order_id','=', $id)->get();
        return $list_product;

    }
}
