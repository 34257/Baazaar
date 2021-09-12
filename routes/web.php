<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::get('/',function(){
    return view('home');
});

Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"index"])->name("admin.index");
    Route::get("products/",[AdminController::class,"product"])->name("admin.product");
    Route::match(["post","get"],"products/add/",[AdminController::class,"insertProduct"])->name("admin.product.insert");
    Route::delete("/delete/{id}",[AdminController::class,"deleteProduct"])->name("admin.product.delete");

    Route::get("category/",[AdminController::class,"category"])->name("admin.categories");
    Route::match(["post","get"],"category/add/",[AdminController::class,"insertCategory"])->name("admin.category.insert");
    Route::delete("/delete/{id}",[AdminController::class,"deleteCategory"])->name("admin.category.delete");
    
    Route::match(["post","get"],"coupon/",[AdminController::class,"coupon"])->name("admin.coupon");
    
    Route::get("address/",[AdminController::class,"address"])->name("admin.address");
    
    Route::get("users/",[AdminController::class,"users"])->name("admin.users");
    
    Route::get("orders/",[AdminController::class,"orders"])->name("admin.orders");
});