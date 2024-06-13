<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

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


Route::get('home', [ProductController::class, 'home'])->name('home');

Route::get('/product', [ProductController::class, 'product'])->name('product.index');

Route::get('category', [CategoryController::class, 'index'])->name('category.index');



// Route::get('products', [AdminController::class, 'products']);