<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('view.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
