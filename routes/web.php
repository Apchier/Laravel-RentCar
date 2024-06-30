<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'proses'])->name('login.success');
Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('users', function () {
        return view('users.index');
    })->name('users')->middleware('auth');

    Route::get('mobil', function() {
        return view('mobil.index');
    })->name('mobil')->middleware('auth');

    Route::get('transaksi', function () {
        return view('transaksi.index');
    })->name('transaksi')->middleware('auth');

    Route::get('laporan', function () {
        return view('laporan.index');
    })->name('laporan')->middleware('auth');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');

Route::get('/about', function () {
    return view('dashboard.about');
})->name('about');
