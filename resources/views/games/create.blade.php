<!-- resources/views/games/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Juegos</h1>
    <form action="{{ route('games.store') }}" method="POST">
        @csrf
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

        @for ($i = 0; $i < 3; $i++)
            <div class="game-entry">
                <h3>Juego {{ $i + 1 }}</h3>
                <div class="form-group">
                    <label for="nombre[]">Nombre del juego:</label>
                    <input type="text" name="nombre[]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="genero[]">Género:</label>
                    <input type="text" name="genero[]" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcion[]">Descripción:</label>
                    <textarea name="descripcion[]" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="calificacion[]">Calificación:</label>
                    <input type="number" name="calificacion[]" class="form-control">
                </div>
                <hr>
            </div>
        @endfor

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
