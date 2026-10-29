@extends('layouts.app')

@section('title', 'Soporte360 - Panel de Control')

@section('content')
<section class="tarjeta">
    <h2>Panel de Administración</h2>
    <p>Bienvenido, <strong>{{ Auth::user()->name }}</strong> ({{ Auth::user()->email }})</p>

    <form action="{{ route('logout') }}" method="POST" style="margin-bottom: 20px;">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>

    <hr>

    <h3>Resumen de la Base de Datos</h3>
    <ul>
        <li><strong>Tabla 1 (Usuarios):</strong> 1 Usuario registrado.</li>
        <li><strong>Tabla 2 (Consultas):</strong> {{ \App\Models\Contacto::count() }} Mensajes recibidos.</li>
        <li><strong>Tabla 3 (Productos/Servicios):</strong> {{ \App\Models\Producto::count() }} Registros.</li>
    </ul>
</section>
@endsection