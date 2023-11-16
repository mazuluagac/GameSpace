<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="" href="assets/iconos/palanca-de-mando.png" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>GAME SPACE | Descarga juegos para PC</title>
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
        <!-- Aquí puedes colocar la barra de navegación u otros elementos de cabecera -->
   <nav class="navbar navbar-expand-lg bg-body-tertiary" id="mainNav">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="{{ route('home')}}">
            <img src="assets/logo game space/2.png" alt="Logo" width="50" height="50" class="...">
            GAME SPACE</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#juegosNS">Juegos Switch</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('games.index') }}">Listado Juegos</a>
          </li>
        </ul>
        <form action="{{ route('search') }}" class="d-flex" role="search" method="GET">
          <input class="form-control me-2" type="search" placeholder="Buscar juego" aria-label="search">
          <button class="btn btn-outline-primary" type="submit">Buscar</button>
        </form>
        <button class="btn btn-outline-primary" id="botonIniciarS"><a href="{{ route('login')}}">Iniciar Sesion</a></button>
        <button class="btn btn-outline-primary" id="botonCrearC"><a href="{{ route('register')}}">Crear cuenta</a></button>
      </div>
    </div>
  </nav>
<!-- contenedor general -->
<div class="container-fluid" id="cont-principal">
    <!-- carousel imagenes -->
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/GAME SPACE princ.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/marioBross.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color: white;"><b>Mario Kart 8 Deluxe</b></h3>
              <p style="color: white;"><b>Disfruta con Mario y sus amigos en divertidas carreras</b></p>
            </div>
          </div>
          <div class="carousel-item">
              <img src="assets/img/xenoblade.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h3 style="color: whitesmoke;"><b>Xenoblade Chronicles 3</b></h3>
                <p style="color: white;">
                  <b>Ven y vive la nueva aventura de xenoblade chronicles,¿Qué nuevas sopresas te traerá este mundo?</b></p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
     
      <!-- Catalogo juegos -->
      <hr id="hrindex">
      <div id="juegosNS">
        <h1 id="h1modif"><img src="assets/iconos/palanca-de-mando.png" alt=""> Últimos <b>Juegos NS</b> agregados</h1>
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <div class="juego">
                <h3><b>Mario Kart 8 Deluxe</b></h3>
                <img src="assets\img\catalogo\Mariokart8Car.jpg" class="image" width="300" height="400" alt="imagen1" data-info="Mario Kart 8 Deluxe || Fecha de lanzamiento: 20/03/2017 || Género: Fiesta,Carreras || Tamaño del archivo: 6,8 GB|| <img src='assets/iconos/estrella.png' alt='''> 4,2  ">
                <ul>
                    <button class="btn btn-outline-primary"><a href="{{ route('juego')}}">Ir al post</a></button>
                </ul>
            </div>
              
            </div>
            <div class="col-sm">
              <div class="juego">
                <h3><b>Super Smash Bros Ultimate</b></h3>
                <img src="assets\img\catalogo\SuperSmashCar.jpg" class="image" width="300" height="400" alt="imagen2" data-info="
                <span class='grande'>Super Smash Bros Ultimate </span>|| Fecha de lanzamiento: 07/12/2018|| Género: Acción, Lucha, Multijugador || Tamaño del archivo: 13,6 GB || <img src='assets/iconos/estrella.png' alt='''> 4,9|| ||">
                <ul>
                    <button class="btn btn-outline-primary"><a href="juego.blade.php">Ir al post</a></button>
                </ul>
            </div>
              
            </div>
            <div class="col-sm">
              <div class="juego">
                <h3><b>Xenoblade Chronicles 3</b></h3>
                <img src="assets\img\catalogo\XenobladeCar.jpg" class="image" width="300" height="400" alt="imagen2" data-info="Xenoblade Chronicles 3 || Fecha de lanzamiento: 01/01/2022 || Género: Acción ||Tamaño del archivo: 10 GB || <img src='assets/iconos/estrella.png' alt='''> 4,4 ">
                <ul>
                    <button class="btn btn-outline-primary"><a href="juego.blade.php">Ir al post</a></button>
                </ul>
              </div>
            </div>
          </div>
        </div>  
      </div>

    </div>

    <!--Ventana Emergente -->
    <div id="image-info" class="image-info-popup">
      <p id="image-info-text"></p>
    </div>

    <!-- footer -->
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
  <script src="js/script.js"></script>
</body>
</html>