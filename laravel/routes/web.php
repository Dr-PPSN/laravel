<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("info", function(){
    return phpinfo();
});

// Route::get("product", function(){
//     return view("product", ["productName" => "Laptop", "productPrice" => 1000]);
// });

Route::get("product", [ProductController::class, "index"]);