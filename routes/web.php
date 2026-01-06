<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('view.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('view.register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Protected routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/desenvolvimento', [DashboardController::class, 'development'])->name('development');
});
