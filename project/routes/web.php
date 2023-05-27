<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\UserController;
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

Route::get("/" , [HomeController::class ,"get_home_page"]);
Route::get("men" , [HomeController::class ,"index"]);
Route::get("women" , [HomeController::class ,"show"]);
Route::get("kids" , [HomeController::class ,"index2"]);
Route::get("all" , [HomeController::class ,"index6"]);
Route::get("Profile" , [HomeController::class ,"index3"]);
Route::get("orders" , [HomeController::class ,"index4"]);

Route::get("men2" , [HomeController::class ,"men2"]);
Route::get("women2" , [HomeController::class ,"women2"]);
Route::get("kids2" , [HomeController::class ,"kids2"]);
Route::get("all2" , [HomeController::class ,"all2"]);


/*categories*/
// Route::middleware(['checkAdmin'])->group(function(){



Route::middleware(['checkAdmin'])->group(function(){
Route::get("categories" , [CategoryController::class ,"index"]);
});

Route::middleware(['checkVendor'])->group(function(){
Route::get("categories/create" , [CategoryController::class ,"create"]);
Route::post("categories/store" , [CategoryController::class ,"store"]);
Route::get("categories/{category}" , [CategoryController::class ,"show"]);
Route::get("categories/destroy/{category}" , [CategoryController::class ,"destroy"]);
Route::get("categories/edit/{category}" , [CategoryController::class ,"edit"]);
});

/*products*/
Route::get("showProduct/{product}" , [ProductController::class ,"show2"]);
Route::get("MyCart/{product}" , [ProductController::class ,"show3"]);

Route::get("MyCart" , [ProductController::class ,"show6"]);
Route::post("MyCart/store" , [ProductController::class ,"show7"]);

Route::get("CheckOut/{product}" , [ProductController::class ,"show4"]);
Route::get("PlaceOrder/{product}" , [ProductController::class ,"show5"]);
Route::get("products/destroy/{product}" , [ProductController::class ,"destroy"]);

Route::middleware(['checkAdmin'])->group(function(){
Route::get("products" , [ProductController::class ,"index"]);
});

Route::middleware(['checkVendor'])->group(function(){
Route::get("products/create" , [ProductController::class ,"create"]);
Route::post("products/store" , [ProductController::class ,"store"]);
});
// });




/*Auth*/
Route::get("register" , [RegisterController::class ,"register"]);
Route::post("register" , [RegisterController::class ,"handleRegister"]);


Route::get("login" , [LoginController::class ,"login"]);
Route::post("login" , [LoginController::class ,"handleLogin"]);


Route::get("logout" , [LoginController::class ,"logout"]);


//get form of add user or admin or vender=moderator
// Route::middleware(['checkAdmin'])->group(function(){
    Route::middleware(['checkVendor'])->group(function(){
    Route::get("addUser" , [UserController::class ,"create"]);
    Route::post("storeUser" , [UserController::class ,"store"]);
});
// });

