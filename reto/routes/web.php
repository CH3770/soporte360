<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Models\Juguete;

Route::get('/', [ContactoController::class, 'index'])->name('inicio');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');


// Ruta 1: La lista de juguetes
Route::get('/juguetes', function () {
    $juguetes = Juguete::all();
    return view('juguetes.index', compact('juguetes'));
});

// Ruta 2: Muestra el formulario de registro
Route::get('/juguetes/nuevo', function () {
    return view('juguetes.nuevo');
});

// Ruta 3: Procesa la validacion, guarda en la base de datos y redirige
Route::post('/juguetes/nuevo', function () {
    $datos = request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.',
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/juguetes');
});