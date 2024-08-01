<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\API\MenuController;
use App\Http\Controllers\API\OrderController;
use Illuminate\Support\Facades\Route;

// Authentication routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Routes that require authentication
Route::middleware(['auth:web'])->prefix('/ore')->name('ore.')->group(function () {
    Route::get('/', [HomePageController::class, 'home'])->name('home');
    Route::resource('menu', MenuController::class);
    Route::resource('order', OrderController::class);
});

// Redirect root to login or home page
Route::get('/', function () {
    return redirect()->route('login');
});

require __DIR__ . '/auth.php';
