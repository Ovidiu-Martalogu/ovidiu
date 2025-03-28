<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MesajeController;
use Illuminate\Support\Facades\Route;

Route::any('/', [HomepageController::class, 'index'])->name('homepage');
Route::any('/oxfordreference', [HomepageController::class, 'oxfordreference'])->name('oxfordreference');
Route::any('/admin', [AdminController::class, 'admin'])->name('admin');

Route::any("/admin_save",[AdminController::class, 'adminSave'])->name('admin_save');
Route::any('/mesaje', [MesajeController::class, 'mesaje'])->name('mesaje');
Route::get('/cards', function () {
  return view('cards');
});


