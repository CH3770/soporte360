<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('inicio');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'correo' => 'required|email|max:255',
        'mensaje' => 'required|string',
    ], [
        'nombre.required' => 'El campo nombre es obligatorio.',
        'correo.required' => 'El campo correo electrónico es obligatorio.',
        'correo.email' => 'Por favor, ingresa un correo electrónico válido.',
        'mensaje.required' => 'El campo mensaje es obligatorio.',
    ]);

    Contacto::create($validated); // Guarda en la BD

    return redirect()->back()->with('exito', 'Estimado cliente, su consulta ha sido recibida. Te responderemos pronto. Le atendio: Marcelo Mamani Venegas');
}
}