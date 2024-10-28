<?php

use App\Http\Controllers\TourController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

    Route::get('/', [IndexController::class, "index"])->name('home');

    Route::get('/tours/{slug}', [TourController::class, "index"])->name('tour_page');
