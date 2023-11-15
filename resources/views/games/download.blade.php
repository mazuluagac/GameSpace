<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar PDF</title>
</head>
<body>
    <div>
        <h1>
            Listado de Juegos - {{count($games)}}
        </h1>
        <table>
            <thead>
                <tr>

                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha de Lanzamiento</th>
                    <th>Género</th>
                    <th>Tamaño</th>
                    <th>Calificación</th>
                </tr>
            </thead>
            <tbody>
                @foreach($games as $game)
                <tr>
                    <td>{{ $game->nombre }}</td>
                    <td>{{ $game->descripcion }}</td>
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