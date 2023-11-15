@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4" style="color: white;">Listado de Juegos</h1>
    <a href="{{ route('games.create') }}" class="btn btn-primary mb-3">Agregar Juego</a>

    <!-- Botones para generación de reportes -->
    <div class="mb-3">
        <a href="{{route('games.descargar-excel')}}" class="btn btn-success">Exportar a Excel</a>
        <a href="{{route('games.descargar-pdf')}}" class="btn btn-danger">Generar PDF</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Fecha de Lanzamiento</th>
                <th>Género</th>
                <th>Tamaño</th>
                <th>Calificación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
            <tr>
                <td>{{ $game->nombre }}</td>
                <td>{{ $game->descripcion }}</td>
                <td>
                    <img src="{{ asset('storage/' . $game->imagen) }}" alt="{{ $game->nombre }}" class="img-thumbnail" style="max-width: 100px;">
                </td>
                <td>{{ $game->fecha_lanzamiento }}</td>
                <td>{{ $game->genero }}</td>
                <td>{{ $game->tamaño }}</td>
                <td>{{ $game->calificacion }}</td>
                <td>
                    <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este juego?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
