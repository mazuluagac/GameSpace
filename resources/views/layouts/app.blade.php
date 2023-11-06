<!DOCTYPE html>
<html>


<head>
    <title>GAME SPACE | Descarga juegos para PC</title>
    
    <link rel="icon" type="" href="assets/iconos/palanca-de-mando.png" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Aquí puedes incluir enlaces a tus hojas de estilo CSS, scripts JS, etc. -->
</head>
<body style="background-image: url('assets/fondoGame.png');">
    <header>
        <!-- Aquí puedes colocar la barra de navegación u otros elementos de cabecera -->
    </header>

    <div class="container">
        @yield('content')
       
    </div>

    <footer>
        <!-- Aquí puedes colocar el pie de página u otros elementos de pie de página -->
    </footer>
</body>
</html>
