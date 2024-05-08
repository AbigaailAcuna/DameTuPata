<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <Title>dametupataSV</Title>
        <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/style.css">
        <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/principal.css">
        <link rel="icon" href="http://localhost/DameTuPata/assets/img/logos/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/swiper-bundle.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="http://localhost/DameTuPata/assets/js/navbar.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11.1.1/swiper-bundle.min.js"></script>
    </head>
    <body>
      <!-- Topbar Start -->
    <div class="top container-fluid d-none d-lg-block">
      <div class="row py-2 px-lg-5">
          <div class="col-lg-6 text-left mb-2 mb-lg-0">
              <div class="d-inline-flex align-items-center">
                  <small><i class="fa fa-phone-alt mr-2"></i>+503 7519 1919</small>
                  <small class="px-3">|</small>
                  <small><i class="fa fa-envelope mr-2"></i>dametupatasv@gmail.com</small>
              </div>
          </div>
          <div class="col-lg-6 text-right">
              <div class="d-inline-flex align-items-center">
                  <a class="px-2" href="https://www.facebook.com/dametupatasv/?locale=es_LA">
                      <i class="fab fa-facebook-f"></i>
                  </a>
                  <a class="px-2" href="https://twitter.com/DameTuPatasv?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a class="px-2" href="https://www.instagram.com/dametupatasv/?hl=es">
                      <i class="fab fa-instagram"></i>
                  </a>
              </div>
          </div>
      </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid p-0 sticky-top">
      <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
          <a href="http://localhost/DameTuPata/views/cliente/Principal.php" class="navbar-brand ml-lg-3">
              <h1 class="m-0"><img src="http://localhost/DameTuPata/assets/img/logos/logo.png" class="logo"> Dame Tu Pata</h1>
          </a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
              <div class="navbar-nav m-auto py-0">
                  <a href="http://localhost/DameTuPata/views/cliente/Principal.php" class="nav-item nav-link active">Inicio</a>
                  <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sobre Nosotros</a>
                     <div class="dropdown-menu rounded-0 m-0">
                         <a href="#" class="dropdown-item">Rescates</a>
                         <a href="#" class="dropdown-item">Don Tino</a>
                     </div>
                 </div>
                  <a href="?c=Principal&a=adopciones" class="nav-item nav-link">Adoptar</a>
                  <a href="?c=Principal&a=donaciones" class="nav-item nav-link">Donar</a>
                  <a href="?c=Compras&a=index" class="nav-item nav-link">Tienda Solidaria</a>
              </div>
          </div>
      </nav>
  </div>
  <!-- Navbar End -->

    <!--Carrusel de imagenes-->
    <div class="carrusel">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Tango/tango1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Tango/tango2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Tango/tango3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Tango/tango5.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Tango/tango6.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Tango/tango7.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Tango/tango8.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Tango/tango9.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Rescates-antes-despues/Tango/tango10.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="info">
          <h1>Tango</h1>
          <p>
            
Baby Tango es un rescate de Dame tu Pata del 23 Diciembre 2023, se encontraba buscando alimento en las calles de Nuevo Cuscatlán.

Baby Tango se trasladó a Veterinaria Marvet, permanecio hospitalizado por 2 meses, se fue curando poco a poco de su piel y ahora es un nene que ha renacido y sobre todo: ADOPTADO Y AMADO.

Muchas gracias a quienes apoyan a Dame tu Pata, estos son los finales felices de nuestros rescates, y los comienzos de una nueva vida para el peludito rescatado.

<br><br>Gracias Beatriz por adoptar a Tango
<br>Gracias doctor Marvin por sus cuidos y profesionalismo hacia nuestros perritos rescatados en Dame tu Pata

<br><br>RESCATAR SALVA VIDAS
<br>Dame tu Pata da vida</p>
        </div>
    </div>
    <!--footer-->

<footer>
    <div class="container">
      <div class="footer-content">
        <p>&copy; 2024 Dame Tu Pata. Todos los derechos reservados.</p>
        <ul class="footer-links">
          <li><a href="#">Política de Privacidad</a></li>
          <li class="separator">|</li> 
          <li><a href="#">Aviso Legal</a></li>
        </ul>
      </div>
    </div>
  </footer>

    <!--=============== SWIPER JS ===============-->
 <script src="js/swiper.min.js"></script>

 <!--=============== MAIN JS ===============-->
 <script src="js/main.js"></script>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

 <!-- Template Javascript -->
 <script src="js/main.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    </body>
</html>