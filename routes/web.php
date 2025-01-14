<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Login pengguna
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'loginAnggota'])->name('login');

// Register pengguna
Route::get('/register', [AuthController::class, 'showRegisterFormAnggota'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Home route for regular users
//Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile route
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Resource route for products
Route::resource('products', ProductController::class);
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/user', function () {
    return view('user');
})->name('user.view');

Route::get('/shopping', [ProductController::class, 'shopping'])->name('shopping.index');
Route::post('/shopping', [ProductController::class, 'buy'])->name('shopping.buy');
Route::get('/shopping/receipt/{id}', [ProductController::class, 'generateReceipt'])->name('shopping.receipt');

Route::get('/shopping', [ProductController::class, 'shopping'])->name('shopping');