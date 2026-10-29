@extends('layouts.app')

@section('title', 'Soporte360 - Inicio')

@section('content')
    <h2>Tu taller especializado en reparación y mantenimiento de computadoras</h2>

    <p>En Soporte360 encuentras soluciones integrales para todas tus necesidades de tecnología.</p>

    <section id="servicios" class="tarjeta">
        <h2>Qué te ofrecemos</h2>
        <ul>
            <li>Mantenimiento preventivo y limpieza</li>
            <li>Formateo e instalación de programas</li>
            <li>Diagnóstico y reparación de hardware</li>
            <li>Optimización de laptops y PC</li>
        </ul>
    </section>

    <section id="contacto">
        <h2>Dónde nos puedes encontrar</h2>
        <p>Dirección: Av. 16 de Julio #456, La Paz.</p>
        <p>Horarios: lunes a sábado, de 8:30 a 18:30.</p>
        <p>WhatsApp: 75274623</p>

        <h3>Envíanos tu consulta</h3>
        
        <form id="form-contacto" action="{{ route('contacto.store') }}" method="POST" novalidate>
            @csrf
            
            <div class="campo">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ej. Juan Pérez" required>
            </div>

            <div class="campo">
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" value="{{ old('correo') }}" placeholder="ejemplo@correo.com" required>
            </div>

            <div class="campo">
                <label for="mensaje">Mensaje o consulta:</label>
                <textarea id="mensaje" name="mensaje" rows="4" placeholder="Describe la falla de tu equipo..." required>{{ old('mensaje') }}</textarea>
            </div>

            <button type="submit">Enviar mensaje</button>

            @if(session('exito'))
                <p class="aviso exito">{{ session('exito') }}</p>
            @endif

            @if($errors->any())
                <p class="aviso error">{{ $errors->first() }}</p>
            @endif
        </form>

    </section>
@endsection