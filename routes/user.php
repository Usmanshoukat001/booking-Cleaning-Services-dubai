<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\HomeController;


Route::middleware(['user'])->prefix('home')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});


