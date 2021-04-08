<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;

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
Route::get('/products', [ProductController::class, "index"]);

Route::post('/products', function()
{
    return product::create([
        name => 'product1',
        desc =>'its a product',
        price => 15,

    ]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
