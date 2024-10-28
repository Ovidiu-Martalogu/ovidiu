<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TeamController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource("team",TeamController::class);