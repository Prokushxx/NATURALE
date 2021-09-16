<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pics;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Products;
use App\Http\Controllers\searchController;
use App\Http\Controllers\Cart;

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
    return view('site');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/sidebar', function(){return view('sidebar');});
route::get('/home',[Products::class,'viewprod']);
route::get('/detail',function(){return view('detail');});
route::get('/home/detail/{id}',[Products::class,'details'])->name('get.id');
route::post("/add_to_cart",[Products::class,'addtocart']);
route::get("/cartlist",[Products::class,'cartList']);
route::get("/removecart/{id}",[Products::class,'removeCart']);
route::get("/orderplace",[Products::class,'orderPlace']);
route::post("/orderplace",[Products::class,'orderPlace']);


route::group(['middleware' => ['protect']], function () {
  route::view('naturale', 'naturale')
  ->middleware('admin')
  ;
  route::get('/products', [Pics::class, 'create']);
  route::POST('/products', [Pics::class, 'store']);
  Route::delete('/products/{product}', [Pics::class, 'destroy'])->name('products.destroy');
  route::get('/users', [Usercontroller::class, 'userpage']);    
  route::get("/ordernow",[Products::class,'orderNow']);
  Route::delete('/users/{user}', [Usercontroller::class, 'destroyusers'])->name('user.destroy');});
