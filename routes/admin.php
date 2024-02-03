<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MasterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Auth/Login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'index')->name('admin.login');
    Route::post('login', 'doLogin')->name('admin.doLogin');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('dashboard', 'index')->name('admin.dashboard');
});

Route::controller(MasterController::class)->group(function () {
    Route::get('master', 'index')->name('admin.master');
});
