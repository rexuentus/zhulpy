<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('home', 'home')
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::view('sewa', 'sewa')
    ->middleware(['auth', 'verified'])
    ->name('sewa');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('upload', 'upload')
    ->middleware(['auth'])
    ->name('uploadrumah');

require __DIR__.'/auth.php';
