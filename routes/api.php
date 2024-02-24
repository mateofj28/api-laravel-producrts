<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', 'App\Http\Controllers\ProductController@index');
Route::post('/products', 'App\Http\Controllers\ProductController@store');

Route::get('/productsShopping', 'App\Http\Controllers\ProductsShoppingController@index');
Route::post('/productsShopping', 'App\Http\Controllers\ProductsShoppingController@store');

Route::get('/buys', 'App\Http\Controllers\BuyController@index');
Route::post('/buys', 'App\Http\Controllers\BuyController@store');
