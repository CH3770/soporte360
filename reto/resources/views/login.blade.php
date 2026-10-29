@extends('layouts.app')

@section('title', 'Soporte360 - Iniciar Sesión')

@section('content')
<section class="tarjeta" style="max-width: 400px; margin: 40px auto;">
    <h2>Iniciar Sesión</h2>

    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="campo">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="admin@soporte360.com">
        </div>

        <div class="campo" style="margin-top: 15px;">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required placeholder="••••••••">
        </div>

        <button type="submit" style="margin-top: 20px; width: 100%;">Ingresar</button>

        @if($errors->any())
            <p class="aviso error" style="margin-top: 15px;">{{ $errors->first() }}</p>
        @endif
    </form>
</section>
@endsection