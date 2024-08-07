<?php

use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::redirect('/', '/home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'home'])->middleware(['auth', 'verified'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

Route::get('product/{slug?}/{variant}', [ProductController::class, 'show'])->name('product.show')->where('size', '[A-Za-z]+');

// Route::get('product/cart', [CartController::class, 'addToCart'])->name('cart.add');
// Product Routes
Route::resource('product', ProductController::class)->parameters(
    ['product' => 'product:slug']
)->only(['index']);


// route::get('/product/cart', [CartController::class, 'index'])->name('cart.index');
// route::post('/product/add/{slug}/{variant}', [CartController::class, 'add'])->name('cart.add');
// route::get('product/cart', [CartController::class, 'index'])->name('cart.index');

Route::resource('carts', CartController::class);