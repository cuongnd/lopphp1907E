<?php

namespace php1907e_th_laravel_1\Http\Controllers;

use Illuminate\Http\Request;
use \Cart;
use DB;
use Session;
use php1907e_th_laravel_1\Customers;
use php1907e_th_laravel_1\Orders;
use php1907e_th_laravel_1\Product;

class CartController extends Controller
{
    //
    public function index(){
        return view("cart");
    }
    public function payNow(){
        return view("checkout");
    }
    public function postPayNow(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gioi_tinh' => 'required',
            'phone_number' => 'required',
            //TODO lat nua phai lam upload product
            //'product_image_intro' => 'required',
            'address' => 'required'
        ]);
        $post=$request->all();
        $customers=new Customers();
        $customers->first_name=$post['first_name'];
        $customers->last_name=$post['last_name'];
        $customers->gender=$post['gioi_tinh'];
        $customers->phone=$post['phone_number'];
        $customers->address=$post['address'];
        $customers->save();
        $order=new Orders();
        $order->customer_id=$customers->id;
        $order->total=Cart::total();
        $order->status="pending";
        $order->save();
        $order_id=$order->id;

        foreach (Cart::content() as $item){
            DB::table('order_product')->insert(
                array(
                    'product_id' => $item->id,
                    'order_id' => $order_id,
                    'product_name' => $item->name,
                    'product_price' => $item->price,
                    'product_qty' => $item->qty,
                )
            );
        }
        Cart::destroy();
        Session::flash('message', 'Bạn đã mua hàng thành công, cám ơn bạn');
        return redirect(route('home'));
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
    public function removeItemCart($id,Request $request){
        Cart::remove($id);
        return redirect(route('gio-hang'));
    }
}
