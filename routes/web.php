<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DistributionCenterController;
use App\Http\Controllers\Backend\RetailPriceController;
use App\Http\Controllers\Backend\TruckingPriceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.frontend.home');
});

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('distribution-center', DistributionCenterController::class)->names('admin.distribution-center');
    Route::resource('city', CityController::class)->names('admin.city');
    Route::resource('retail-price', RetailPriceController::class)->names('admin.retail-price');
    Route::resource('trucking-price', TruckingPriceController::class)->names('admin.trucking-price');
});