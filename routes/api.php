<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BookmarkController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\LandingPageController;
use App\Http\Controllers\API\ProgressController;
use App\Http\Controllers\API\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Landing page
Route::get('/home', [LandingPageController::class, 'home'])->name('home');
Route::get('/categories', [LandingPageController::class, 'categories'])->name('categories');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category');
Route::get('/questions', [QuestionController::class, 'index'])->name('questions');
Route::get('/questions/{question}', [QuestionController::class, 'show'])->name('question');


// Authentication
Route::post('/login', [AuthController::class, 'login'])->name('api.login');
Route::post('/register', [AuthController::class, 'register'])->name('api.register');
Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');

