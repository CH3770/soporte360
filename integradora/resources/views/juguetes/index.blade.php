@extends('layouts.app')

@section('content')

    <p>Bienvenido a la jugueteria el trompo aqui vendemos variedad de juguetes tradicionales y modernos para todas las edades.</p>

    <p>Hay {{ count($juguetes) }} juguetes en el estante.</p>

    <ul>
        @foreach ($juguetes as $juguete)
            <li>{{ $juguete->nombre }} - {{ $juguete->precio }} Bs</li>
        @endforeach
    </ul>

    <p>Estante atendido por Marcelo Ruben Mamani Venegas</p>

    <a href="/juguetes/nuevo">Registrar nuevo juguete</a>

@endsection