<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Cart;
use App\Models\Order;
use App\Models\sign_up;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class Products extends Controller
{
  public function viewprod()
  {
    $photos = Photo::all();
    return view('welcome', ['photos' => $photos]);
  }
  public function details($id)
  {
    // return $id;
    // ddd($id);
    $photo = Photo::where('id', $id)->get();
    return view('detail')->with('photo', $photo);
  }

  function addtocart(Request $request)
  {
    if ($request->session()->has('user')) {
      $cart = new Cart;
      $cart->user_id = ($request->session()->get('id'));
      $cart->product_id = $request->product_id;
      $cart->save();
      return redirect()->back();
    } else {
      return redirect('/login');
    }
  }

  static function cartItem()
  {
    $userId = Session('id');
    return Cart::where('user_id', $userId)->count();
  }
  function cartList()
  {
    $userId = Session('id');
    $product = DB::table('cart')
      ->join('photos', 'cart.product_id', '=', 'photos.id')
      ->where('cart.user_id', $userId)
      ->select('photos.*', 'cart.id as cart_id')
      ->get();
    return view('cartlist', ['products' => $product]);
  }
  function removeCart($id)
  {
    Cart::destroy($id);
    return redirect()->back();
  }
  function orderNow(){
    $userId = Session('id');
    $total  = DB::table('cart')
      ->join('photos', 'cart.product_id', '=', 'photos.id')
      ->where('cart.user_id', $userId)
      ->sum('photos.price');
      // ddd($total);
    return view('ordernow', ['total' => $total]);
  }
  function orderPlace(Request $req){
    $userId= Session('id');
    $allCart= Cart::where('user_id',$userId)->get();
    foreach($allCart as $cart){
   $order = New Order();
   $order->product_id=$cart['product_id']; 
   $order->user_id=$cart['user_id']; 
   $order->status="pending"; 
   $order->payment_method=$req->payment; 
   $order->payment_status="pending"; 
   $order->address=$req->address;
   $order->save();
   Cart::where('user_id',$userId)->delete();
   return redirect('home');
    }
 
  }
} 

