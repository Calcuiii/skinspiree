<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');

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

// Rute Halaman Dashboard (Setelah login)
Route::middleware('form')->get('/home', function () {
    return view('home');
});

// Home route for regular users
Route::get('/home', function () {
    return view('home');
})->name('home');

// Home route for admin users
Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin.home');

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('profile', ProfileController::class)->name('profile');
Route::resource('products', ProductController::class);

Route::resource('/products',\App\Http\Controllers\ProductController::class);
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');