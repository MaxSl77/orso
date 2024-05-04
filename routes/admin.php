<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'home'])->name('home');

Route::middleware("guest:admin")->group(function() {
    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login');
    Route::post('login_process', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login_process');
});

Route::middleware("auth:admin")->group(function() {
    Route::get('logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    Route::resource('sales', \App\Http\Controllers\Admin\SalesController::class);
    Route::resource('admin_users', \App\Http\Controllers\Admin\AdminUserController::class);
    Route::resource('equipments', \App\Http\Controllers\Admin\EquipmentController::class);
    Route::resource('procedure-groups', \App\Http\Controllers\Admin\ProcedureGroupController::class);
    Route::resource('procedures', \App\Http\Controllers\Admin\ProcedureController::class);
    Route::resource('doctors', \App\Http\Controllers\Admin\DoctorController::class);
});
