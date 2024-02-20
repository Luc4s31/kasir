<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Staff\CartController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Staff\ProductController as ProductStaff;
use App\Http\Controllers\Admin\TransactionController;

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

// Auth

Route::get('/',[AuthController::class,'login']);
Route::post('/',[AuthController::class,'masuk'])->name('login');

Route::controller(ProductController::class)->prefix("products")->group(function () {
    Route::get('','index')->name('products');
    Route::get('/create','create')->name('add.products');
    Route::post('','store')->name('store.products');
    Route::get('/{id}','edit')->name('edit.products');
    Route::put('/{id}','update')->name('update.products');
    Route::get('/delete/{id}','destroy')->name('delete.products');
});

Route::get('/transactions',[TransactionController::class,'index']);

Route::controller(UserController::class)->prefix("users")->group(function () {
    Route::get('','index')->name('users');
    Route::get('/create','create')->name('add.users');
    Route::post('','store')->name('store.users');
    Route::get('/{id}','edit')->name('edit.users');
    Route::put('/{id}','update')->name('update.users');
    Route::get('/delete/{id}','destroy')->name('delete.users');
});


//staff
Route::get('/carts', [CartController::class, 'index'])->name('carts');
Route::post('/carts', [CartController::class, 'store'])->name('add.carts');
Route::get('/carts/delete/{id}', [CartController::class, 'destroy'])->name('delete.carts');
Route::get('/list-product', [ProductStaff::class, 'index'])->name('list.products');
Route::get('/transaction', [TransactionController::class, 'index']);
