<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exportar PDF</title>
</head>
<body>
    <div>
        <h1>
            Listado de Juegos - {{count($game)}} registros
        </h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Fecha de Lanzamiento</th>
                    <th>Género</th>
                    <th>Tamaño</th>
                    <th>Calificación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($game as $game)
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>