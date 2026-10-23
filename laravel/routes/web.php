<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', [ContactoController::class, 'index'])->name('inicio');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');