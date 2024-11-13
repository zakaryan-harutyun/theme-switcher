<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
Route::post('/set-theme', [PageController::class, 'setTheme'])->name('theme.set');
