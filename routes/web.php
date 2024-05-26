<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DistributionCenterController;
use App\Http\Controllers\Backend\GaleryController;
use App\Http\Controllers\Backend\RetailPriceController;
use App\Http\Controllers\Backend\TruckingPriceController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index']);
Route::get('layanan', [FrontendController::class, 'layanan']);
Route::get('tentang', [FrontendController::class, 'tentang']);
Route::get('tentang', [FrontendController::class, 'tentang']);
Route::match(['get', 'post'], 'cek-tarif', [FrontendController::class, 'cekTarif'])->name('cek-tarif');
Route::get('cabang', [FrontendController::class, 'cabang']);
Route::get('galery', [FrontendController::class, 'galery']);
Route::get('video', [FrontendController::class, 'video']);
Route::get('faq', [FrontendController::class, 'faq']);
Route::get('kota-asal/{kategori}', [FrontendController::class, 'kotaAsal']);
Route::get('kota-tujuan/{kategori}', [FrontendController::class, 'kotaTujuan']);

Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('distribution-center', DistributionCenterController::class)->names('admin.distribution-center');
    Route::resource('city', CityController::class)->names('admin.city');
    Route::resource('retail-price', RetailPriceController::class)->names('admin.retail-price');
    Route::resource('trucking-price', TruckingPriceController::class)->names('admin.trucking-price');
    Route::resource('galery', GaleryController::class)->names('admin.galery');
    Route::resource('video', VideoController::class)->names('admin.video');
});
