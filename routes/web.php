<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/contact', [\App\Http\Controllers\ContactFormController::class, 'show'])->name('contact.form');

Route::post('/contact', [\App\Http\Controllers\ContactFormController::class, 'send'])->name('contact.send');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard');
