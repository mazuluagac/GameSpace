<!-- resources/views/users/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Usuario</h1>
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

        <div class="user-entry">
            <div class="form-group">
                <label for="nombre">Nombre del usuario:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $user->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <textarea name="email" class="form-control">{{ $user->email }}</textarea>
            </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection