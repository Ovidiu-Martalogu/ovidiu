<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::any('/', [HomepageController::class, 'index'])->name('homepage');
Route::any('/oxfordreference', [HomepageController::class, 'oxfordreference'])->name('oxfordreference');
Route::any('/admin', [AdminController::class, 'admin'])->name('admin');
//Route::any('/admin', [AdminController::class, 'save'])->name('save');
//Route::any('/admin_save', [AdminController::class, 'save'])->name('save');
//Route::any("admin_save",[AdminController::class,'save'])->name('admin_save');


