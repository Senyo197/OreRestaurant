<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\API\MenuController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\OrderController;
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


Route::middleware(['auth:web','ore'])->prefix('/ore')->name('ore.')->group(function () {
    Route::get('/', [HomePageController::class, 'home'])->name('home');
    Route::resource('menu', MenuController::class);
    Route::resource('order', OrderController::class);
    Route::get('/user', [HomePageController::class, 'user'])->name('user');
});

Route::get('/',[]);

require __DIR__ . '/auth.php';
