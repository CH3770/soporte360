@extends('layouts.app')

@section('content')

    <h2>Agregar nuevo juguete</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/juguetes/nuevo" method="POST">
        @csrf

        <div>
            <label for="nombre">Nombre del juguete:</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <div>
            <label for="precio">Precio en Bs:</label>
            <input type="number" id="precio" name="precio">
        </div>

        <button type="submit">Registrar juguete</button>
    </form>

    <br>
    <a href="/juguetes">Volver a la lista</a>

@endsection