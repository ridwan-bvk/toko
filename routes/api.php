<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products',[ProductApiController::class,'index']); 
// Route::get('/products/create',[ProductApiController::class,'create']); tidak menggunakan create,karena createnya dimobile
Route::post('/products',[ProductApiController::class,'store']); //http://127.0.0.1:8000/api/products
// Route::get('/products/{id}/edit',[ProductApiController::class,'edit']); //tidak menggunakan form lg
Route::get('/products/{id}',[ProductApiController::class,'show']); //http://127.0.0.1:8000/api/products/1
Route::put('/products/{id}',[ProductApiController::class,'update']); //http://127.0.0.1:8000/api/products/1
ROute::delete('/products/{id}',[ProductApiController::class,'destroy']);//delete