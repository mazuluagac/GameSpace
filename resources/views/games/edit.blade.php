@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Juego</h1>

        <form action="{{ route('games.update', $game->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre del juego:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $game->nombre }}">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control">{{ $game->descripcion }}</textarea>
            </div>

            <div class="form-group">
                <label for="genero">Género:</label>
                <input type="text" name="genero" class="form-control" value="{{ $game->genero }}">
            </div>

            <div class="form-group">
                <label for="fecha_lanzamiento">Fecha de Lanzamiento:</label>
                <input type="date" name="fecha_lanzamiento" class="form-control" value="{{ $game->fecha_lanzamiento }}">
            </div>

            <div class="form-group">
                <label for="tamaño">Tamaño:</label>
                <input type="text" name="tamaño" class="form-control" value="{{ $game->tamaño }}">
            </div>

            <div class="form-group">
                <label for="calificacion">Calificación:</label>
                <input type="number" name="calificacion" class="form-control" value="{{ $game->calificacion }}">
            </div>

            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
@endsection
