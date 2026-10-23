<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Soporte360 - Taller de Computadoras')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <h1>Soporte360 Computadoras</h1>
        <button class="hamburger" id="btn-hamburger" aria-label="Abrir menú">☰</button>
        <nav id="nav-menu">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <button id="btn-theme">🌙</button>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Marcelo Ruben Mamani Venegas. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>