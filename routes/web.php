<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [DashboardController::class, 'index'])->name('admin');

Route::get('account/signin', [AuthController::class, 'signin'])->name('account.signin');
Route::get('account/signup', [AuthController::class, 'signup'])->name('account.signup');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/deltails', [ProductController::class, 'show'])->name('details');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
Route::get('/test', [TestController::class, 'index'])->name('test');
