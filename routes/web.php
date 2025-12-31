<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandResourceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ColorModeController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('auth.login');
});



//Order
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/orders/update-status/{id}', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');


Route::get('cart', [StripeController::class, 'showCart'])->name('cart.view');
//upload cart details save session to database and Active stripe payment
Route::get('payment', [StripeController::class, 'payment'])->name('payment');
Route::post('checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('success', [StripeController::class, 'success'])->name('payment.success');
Route::get('cancel', [StripeController::class, 'cancel'])->name('payment.cancel');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Multi Admin
Route::get('/dashboard',[HomeController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

//Admin controller

//Category resource controller
Route::resource('categories', CategoryController::class);

//Band Resource controller
Route::resource('bands', BrandResourceController::class);

//product Resource controller
Route::resource('products', ProductController::class);

// Route::resource('categories',CategoryController::class);

Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');

//Dark and light mode
Route::get('/color-mode.php', [ColorModeController::class, 'toggle'])->name('color.mode');

require __DIR__ . '/auth.php';
