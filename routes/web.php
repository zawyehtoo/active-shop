<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[ProductsController::class,'atLeastShow'])->name('homepage');

Route::group(['middleware'=>'auth'],function (){
    
    Route::get('shop',[CategoryController::class,'shopCategory'])->name('shop');
    Route::get('shop/{id}',[CategoryController::class,'showAllProducts']);

    Route::get('men-shop',[CategoryController::class,'menCategory'])->name('men-shop');
    Route::get('men-shop/{id}',[CategoryController::class,'showMenProducts']);

    Route::get('women-shop',[CategoryController::class,'womenCategory'])->name('women-shop');
    Route::get('women-shop/{id}',[CategoryController::class,'showWomenProducts']);

    Route::get('kids-shop',[CategoryController::class,'kidsCategory'])->name('kids-shop');
    Route::get('kids-shop/{id}',[CategoryController::class,'showKidsProducts']);

    Route::get('productdetail/{id}',[ProductsController::class,'detail'])->name('productdetail');

    Route::post('item/{id}',[ProductsController::class,'store'])->name('item');

    Route::get('cart',[ProductsController::class,'showOrder'])->name('cart');

    //before edit
    Route::get('edit/{id}',[ProductsController::class,'edit'])->name('edit');

    //after edit
    Route::put('edited/{product_id}/{order_id}',[ProductsController::class,'update'])->name('edited');

    Route::delete('delete/{id}',[ProductsController::class,'destroy'])->name('destroy');


  
  //admin page
    Route::group(['prefix'=>'admin','middleware'=>'isAdmin'],function (){
        Route::get('/addproduct',[CategoryController::class,'add'])->name('addproduct');


        Route::post('/storeproducts',[ProductsController::class,'storeProducts'])->name('storeproducts');

        Route::get('/showproducts',[ProductsController::class,'productList'])->name('showproducts');

        Route::post('/edit/{id}',[ProductsController::class,'editProduct']);

        Route::put('/edited/{id}',[ProductsController::class,'updateProduct'])->name('update');

        Route::delete('/delete/{id}',[ProductsController::class,'delete']);

        Route::get('/orders',[ProductsController::class,'AdminOrder'])->name('orders');

        Route::get('/customers',[ProductsController::class,'showCustomer'])->name('customers');

        Route::get('/orders/{id}',[ProductsController::class,'isConfirmed']);

        Route::get('/overview',function(){
            return view('admin_panel.overview');
        })->name('overview');

 
      
        Route::get('/order_detail',function(){
            return view('admin_panel.order_detail');
        })->name('order_detail');

    });
});



Auth::routes();
Route::get('/home',[HomeController::class,'index']);