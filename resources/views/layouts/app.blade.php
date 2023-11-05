<!DOCTYPE html>
<html>


<head>
    <title>Título de tu sitio</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Aquí puedes incluir enlaces a tus hojas de estilo CSS, scripts JS, etc. -->
</head>
<body>
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
