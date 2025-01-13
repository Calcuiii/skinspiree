<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
