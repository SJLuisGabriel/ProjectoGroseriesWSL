<?php

use App\Http\Controllers\APIEcommerceController;
use App\Models\Products;
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


Route::get("/products", [APIEcommerceController::class , 'products']) -> name("api.product.list");
Route::get("/product_td", [APIEcommerceController::class , 'product_td']) -> name("product_td");
Route::get("/categories", [APIEcommerceController::class , 'category']) -> name("categories");
