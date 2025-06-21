<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [ClientController::class, 'index'])->name('dashboard');
});


Route::middleware(['auth', 'admin', 'vpn'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});
