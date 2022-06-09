<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product', [ProductController::class, 'create'])->name('createProduct');
Route::get('/product/edit', [ProductController::class, 'edit'])->name('createProduct');
Route::post('/product/add', [ProductController::class, 'store'])->name('storeProduct');
Route::post('/product/update', [ProductController::class, 'update'])->name('updateProduct');
Route::get('/products/user', [ProductController::class, 'show']);
