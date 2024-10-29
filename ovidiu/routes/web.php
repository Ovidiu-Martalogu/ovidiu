<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::any('/', [HomepageController::class, 'index'])->name('homepage');
