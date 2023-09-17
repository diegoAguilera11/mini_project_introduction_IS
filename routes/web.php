<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;

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
    return view('auth.login');
})->name('login');


Route::get('register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::post('/login', [LoginController::class, 'store'])->name('login.store');


Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('products', [ProductController::class, 'index'])->name('products');

Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
Route::post('product', [ProductController::class, 'store'])->name('product.store');
Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
