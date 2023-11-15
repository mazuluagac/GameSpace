@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4" style="color: white;">Listado de Usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Agregar Usuario</a>

    <!-- Botones para generación de reportes -->
    <div class="mb-3">
        <a href="{{route('users.descargar-excel')}}" class="btn btn-success">Exportar a Excel</a>
        <a href="{{route('users.descargar-pdf')}}" class="btn btn-danger">Generar PDF</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($user as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
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