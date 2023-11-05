<!-- resources/views/games/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Juego</h1>
    <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

        <div class="game-entry">
            <div class="form-group">
                <label for="nombre">Nombre del juego:</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="genero">Género:</label>
                <input type="text" name="genero" class="form-control">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="calificacion">Calificación:</label>
                <input type="number" name="calificacion" class="form-control">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="fecha_lanzamiento">Fecha de Lanzamiento:</label>
                <input type="date" name="fecha_lanzamiento" class="form-control">
            </div>
            <div class="form-group">
                <label for="tamaño">Tamaño:</label>
                <input type="text" name="tamaño" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
