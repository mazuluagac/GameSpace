@extends('layouts.app')

@section('content')

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
      <!-- JS -->

<!-- </body>

</html> -->
@endsection