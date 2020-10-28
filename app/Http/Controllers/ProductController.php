<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Session;
use Illuminate\Support\facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product',["products"=>$data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['productDetail'=>$data]);

    }
    function search(Request $req)
    {
         $data = Product::where('name','Like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);

    }
    function addTOCart(Request $req)
    {
        if($req->session()->has('user')){
            $cart = new Cart();
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect("/");
        }
        else{
            return redirect("/login");
        }
    }

    static function cartItem()
    {
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }

    function cartList()
    {
        $user_id = Session::get('user')['id']; 
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$user_id)
        ->select('products.*','cart.id as cart_id')
        ->get();
        // return print_r($products);
        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartList');
    }

    function ordernow()
    {
        $user_id = Session::get('user')['id']; 
        $total = $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$user_id)
        ->sum('products.price');
        // return print_r($products);
        return view('ordernow',['total'=>$total]);        
    }
    function orderPlace(Request $req)
    {
        $user_id = Session::get('user')['id']; 
        $allCart = Cart::where('user_id',$user_id)->get();
        foreach($allCart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->address = $req->address;
            $order->status = "Pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "Pending";
            $order->save();
        }
        Cart::where('user_id',$user_id)->delete();
        return redirect('/');
    }
    function myOrders()
    {
        $user_id = Session::get('user')['id']; 
        $myorders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$user_id)
        ->get(); 
        return view('myorders',["myorders"=>$myorders]);
    }
}
