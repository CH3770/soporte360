<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Models\Juguete;

Route::get('/juguetes', function () {
    $juguetes = Juguete::all();
    return view('juguetes.index', compact('juguetes'));
});

Route::get('/juguetes/nuevo', function () {
    return view('juguetes.nuevo');
});

Route::post('/juguetes/nuevo', function () {
    $datos = request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
        'stock'  => 'required|integer',
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer'  => 'Aca el precio va entero, sin decimales ni letras.',
        'stock.required'  => 'Pone el stock del juguete.',
        'stock.integer'   => 'El stock tiene que ser un numero entero.',
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
        'stock'  => request()->input('stock'),
    ]);

    return redirect('/juguetes');
});