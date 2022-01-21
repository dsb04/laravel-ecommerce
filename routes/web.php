<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('Hello World');
});

Route::get('/product',[
ProductController::class,
'index'
]);
Route::get('/product/create', [
    ProductController::class,
    'create'
]);
Route::post('/product/store', [
    ProductController::class,
    'store'
]);
Route::get('/product/show/{id}', [
    ProductController::class,
    'show'
]);
Route::get('/product/edit/{id}', [
    ProductController::class,
    'edit'
]);
Route::post('/product/update/{id}', [
    ProductController::class,
    'update'
]);
Route::get('/product/delete/{id}', [
    ProductController::class,
    'destroy'
]);