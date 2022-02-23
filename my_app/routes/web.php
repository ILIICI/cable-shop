<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;

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
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/charger/{slug}', [PageController::class, 'description'])->name('desc');
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('category/{product_cat}/{product_sub_cat}', [PageController::class, 'category'])->name('category');
Route::get('/product-details/{slug}', [PageController::class, 'productDetails'])->name('product.details');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');

Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('/remove/{id}', [CartController::class, 'deleteFromCart'])->name('cart.remove');
Route::get('/increase/{id}', [CartController::class, 'increase'])->name('cart.increase');
Route::get('/decrease/{id}', [CartController::class, 'decrease'])->name('cart.decrease');