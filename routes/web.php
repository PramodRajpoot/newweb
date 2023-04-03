<?php

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
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\IndexController::class, 'aboutUs'])->name('about-us');
Route::get('/shop-list-slider', [App\Http\Controllers\IndexController::class, 'shoplistslider'])->name('shop-list-slider');
Route::get('/product-details', [App\Http\Controllers\IndexController::class, 'productdetails'])->name('product-details');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

