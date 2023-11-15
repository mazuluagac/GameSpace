@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Usuario</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre del usuario:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <textarea name="email" class="form-control">{{ $user->email }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
@endsection