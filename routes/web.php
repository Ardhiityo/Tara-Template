<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('main');

Route::get('/items/1', function () {
    return view('show');
})->name('item.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::view('/merchants/1', 'pages.merchant.show')->name('merchant.show');
    Route::view('/merchants/1/edit', 'pages.merchant.edit')->name('merchant.edit');
    Route::view('/services/create', 'pages.service.create')->name('service.create');
    Route::view('/services/1', 'pages.service.show')->name('service.show');
    Route::view('/services/1/edit', 'pages.service.edit')->name('service.edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/biography', [ProfileController::class, 'updateBiography'])->name('profile.biography.update');
    Route::patch('/profile/phone', [ProfileController::class, 'updatePhone'])->name('profile.phone.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
