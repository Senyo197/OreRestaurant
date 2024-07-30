<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\QuestionController;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth:web','admin'])->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'home'])->name('home');
    Route::resource('menu', MenuController::class);
    Route::resource('order', OrderController::class);
    Route::get('/users', [AdminDashboardController::class, 'users'])->name('users');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/',[]);

require __DIR__ . '/auth.php';
