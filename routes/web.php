<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\tujuandonasiController;
use App\Http\Controllers\donaturController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\DonasiItemController;

/*
|--------------------------------------------------------------------------
| AUTH ADMIN ROUTES
|--------------------------------------------------------------------------
*/

// tampilkan halaman login
Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('admin.login');

// proses login
Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.process');
// logout
Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('admin.logout');

Route::get('/donasi', [AdminController::class, 'donasi'])->name('donasi');

Route::get('/laporan', [AdminController::class, 'donatur'])->name('laporan');
Route::get('/login', [AdminController::class, 'login'])->name('login');

// Halaman daftar tujuan donasi
Route::get('/tujuan', [tujuandonasiController::class, 'index'])
    ->name('tujuan.index');
// Tambah tujuan donasi
Route::get('/tujuan/create', [TujuanDonasiController::class, 'create'])
    ->name('tujuan.create');
Route::post('/tujuan', [TujuanDonasiController::class, 'store'])
    ->name('tujuan.store');
// Edit tujuan donasi
Route::get('/tujuan/{id}/edit', [TujuanDonasiController::class, 'edit'])
    ->name('tujuan.edit');
Route::put('/tujuan/{id}', [TujuanDonasiController::class, 'update'])
    ->name('tujuan.update');
// Hapus tujuan donasi
Route::delete('/tujuan/{id}', [TujuanDonasiController::class, 'destroy'])
    ->name('tujuan.destroy');

Route::get('/', [LandingpageController::class, 'home'])->name('home');
Route::get('/about', [LandingpageController::class, 'about'])->name('about');
Route::get('/donasi_list', [LandingpageController::class, 'donasi_list'])->name('donasi_list');
Route::get('/donasi_detail', [LandingpageController::class, 'donasi_detail'])->name('donasi_detail');
Route::get('/donasi_sekarang', [LandingpageController::class, 'donasi_sekarang'])->name('donasi_sekarang');
Route::get('/event_list', [LandingpageController::class, 'event_list'])->name('event_list');
Route::get('/event_detail', [LandingpageController::class, 'event_detail'])->name('event_detail');
Route::get('/galery', [LandingpageController::class, 'galery'])->name('galery');
Route::get('/contact', [LandingpageController::class, 'contact'])->name('contact');


Route::get('/donasi/{id}', [LandingpageController::class, 'donasi_sekarang'])
    ->name('donasi.sekarang');



    Route::post('/donasi/donatur', [DonaturController::class, 'store'])
    ->name('donatur.store');


    // Donatur (ADMIN)
    Route::get('/donatur', [DonaturController::class, 'index'])->name('donatur.index');
    Route::get('/donatur/{id}', [DonaturController::class, 'show'])->name('donatur.show');
    Route::delete('/donatur/{id}', [DonaturController::class, 'destroy'])->name('donatur.destroy');

// LANDING
Route::post('/donasi/store', [DonasiController::class, 'store'])
    ->name('donasi.store');

Route::get('/donasi-detail/{id}', [DonasiController::class, 'show'])
    ->name('donasi.detail');

// ADMIN
Route::get('/admin/donasi', [DonasiController::class, 'index'])
    ->name('admin.donasi.index');

Route::put('/admin/donasi/{id}/status', [DonasiController::class, 'updateStatus'])
    ->name('admin.donasi.status');

    // routes/web.php
Route::get('/donasi', [DonasiController::class, 'index'])->name('admin.donasi.index');

// Admin Donasi
Route::prefix('admin')->group(function () {
    Route::get('/donasi', [DonasiController::class, 'index'])->name('admin.donasi.index');

    // Update status donasi
    Route::post('/admin/donasi/{id}/update-status', [DonasiController::class, 'updateStatus'])
    ->name('admin.donasi.updateStatus');

    Route::get('/admin/donasi/{id}', [DonasiController::class, 'show'])
    ->name('admin.donasi.show');


});


Route::prefix('donasi/{donasi_id}/items')
    ->name('donasi_items.')
    ->group(function () {

        Route::get('/', [DonasiItemController::class, 'index'])
            ->name('index');        // list item

        Route::get('/create', [DonasiItemController::class, 'create'])
            ->name('create');       // form tambah

        Route::post('/', [DonasiItemController::class, 'store'])
            ->name('store');        // simpan
    });


Route::get('/dashboard', [DonasiItemController::class, 'adminIndex'])
    ->name('admin.dashboard');


        Route::get('/dashboard/{id}', [DonasiItemController::class, 'adminShow'])
            ->name('admin.dashboard.show');

        Route::delete('/dashboard/{id}', [DonasiItemController::class, 'destroy'])
            ->name('admin.dashboard.destroy');
