<!-- game-detail.blade.php -->

<div class="container-fluid" id="cont-juego">
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME SPACE | Descargar Juego</title>
    <!-- Flaticon-->
    <link rel="icon" type="" href="assets/iconos/palanca-de-mando.png" />
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-image: url('assets/fondoGame.png');">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="mainNav">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/logo game space/2.png" alt="Logo" width="50" height="50" class="...">
                    GAME SPACE</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                        </li>
                    </ul>
            </div>
        </div>
      </nav>
    <!-- contenedor -->
    <div class="container-fluid" id="cont-juego">
        <div class="row">
          <div class="col-md-4">
            <img src="assets/img/catalogo/Mariokart8Car.jpg" alt="Carátula del juego" id="cover">
          </div>
          <div class="col-md-8">
            <h1 id="h1modif"><b>Mario Kart 8 Deluxe</b></h1>
            <p>Fecha de lanzamiento: 27 de abril de 2017 <span id="fecha-lanzamiento"></span></p>
            <p>Género: Fiesta, Carreras <span id="genero"></span></p>
            <p>Tamaño: 6,8 GB <span id="tamaño"></span></p>
            <p>Resumen de descripción: Compite y lucha contra tus amigos en la versión definitiva de Mario Kart 8.
              ¡Sal a la carretera con la versión definitiva de Mario Kart 8 y juega en cualquier momento y en cualquier lugar! Compite con tus amigos o lucha contra ellos en un modo de batalla revisado en campos de batalla nuevos y antiguos. Juega localmente en modo multijugador de hasta 4 jugadores en 1080p mientras juegas en modo TV. Cada pista de la versión de Wii U, incluido el DLC, tiene un regreso glorioso. Además, los Inklings aparecen como nuevos personajes invitados, junto con los favoritos que regresan, como King Boo, Dry Bones y Bowser Jr. <span id="resumen"></span></p>
            <p>Enlace de descarga: <a href="#" id="enlace-descarga">Descargar</a></p>
            <div class="row">
              <div class="col-md-12">
                <h3>Galería de imágenes</h3>
                <div id="galeria"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h3>Tags</h3>
                <ul id="tags"></ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h3>Calificación <img src="assets/iconos/estrella.png" alt="calificacion"> 4,2 </h3>
                <div id="calificacion"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- video trailer -->
        <div id="divTrailer">
            <hr id="hrindex">
            <h2><b>Trailer</b></h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tKlRN2YpxRE?si=BqJUaee3x2cM7Hzuau?autoplay=1" id="video"
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>

        


    <!-- Footer -->
    <footer class="pie-pagina">
      <div class="grupo-1">
          <div class="box">
              <figure>
                  <a href="#">
                      <img src="assets/logo game space/1.png" alt="Logo de Game-Space">
                  </a>
              </figure>
          </div>
          <div class="box">
              <h2><b>SOBRE NOSOTROS</b></h2>
              <p>Desarrollado por:
                <li id="developers">Daniel Felipe Mejia</li>
                <li id="developers">Manuela Zuluaga Cardona</li>
                <li id="developers">Santiago Mazo Orozco</li>
              </p>
              <p>Estudiantes del programa <b>Administración de Sistemas Informaticos</b> de la Universidad Nacional de Colombia Sede Manizales</p>
          </div>
          <div class="box">
              <h2>SIGUENOS</h2>
              <div class="red-social">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-instagram"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-youtube"></a>
              </div>
          </div>
      </div>
      <div class="grupo-2">
          <small>&copy; 2023 <b>GAME SPACE</b> - Todos los Derechos Reservados.</small>
      </div>
  </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</body>
</html>
</div>