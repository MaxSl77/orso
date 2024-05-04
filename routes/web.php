<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');
    Route::get('/forgot', [\App\Http\Controllers\AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot_process', [\App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot_process');
});

Route::prefix('equipment')->group(function () {
    Route::get('/', [\App\Http\Controllers\EquipmentController::class, 'index'])->name('equipment');
});

Route::prefix('stuff')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'stuff'])->name('stuff');
});

Route::prefix('zhanna')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'zhanna'])->name('zhanna');
});

Route::prefix('mikhail')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'mikhail'])->name('mikhail');
});

Route::prefix('olga')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'olga'])->name('olga');
});
