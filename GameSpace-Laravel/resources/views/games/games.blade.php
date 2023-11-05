@extends('layouts.app')

@section('content')
    <h1>Listado de Juegos</h1>
    
    <table>
    <thead>
    <tr>
        <th>Título</th>
        <th>Género</th>
        <th>Fecha de Lanzamiento</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach($games as $game)
        <tr>
            <td>{{ $game->title }}</td>
            <td>{{ $game->genre }}</td>
            <td>{{ $game->release_date }}</td>
            <td>
                <a href="{{ route('games.show', $game->id) }}">Ver</a>
                <a href="{{ route('games.edit', $game->id) }}">Editar</a>
            </td>
        </tr>
    @endforeach
</tbody>
    </table>

    @include('games-detail')
@endsection
?>
