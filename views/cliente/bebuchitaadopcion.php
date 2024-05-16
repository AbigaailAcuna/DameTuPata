<?php include 'views/layouts/header2.php'; ?>

<div class="adopcion">
    <h1>EN ADOPCION</h1>
</div>
    <!--Carrusel de imagenes-->
    <div class="carrusel">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Bebuchita12-Hija de Gigi/bebuchita1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Bebuchita12-Hija de Gigi/bebuchita2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Bebuchita12-Hija de Gigi/bebuchita3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Bebuchita12-Hija de Gigi/bebuchita4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="http://localhost/DameTuPata/assets/img/Rescates-antes-despues/Bebuchita12-Hija de Gigi/bebuchita5.jpg" class="d-block w-100" alt="...">
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
          <h1>Bebuchita</h1>
          <br>
          <div class="iconos">
            <div class="elementos"><i class="fa-solid fa-venus-mars"></i><b><p>Sexo:</p></b><p>Femenino</p></div>
            <div class="elementos"><i class="fa-solid fa-calendar"></i><b><p>Edad:</p></b><p>9 meses</p></div>
            <div class="elementos"><i class="fa-solid fa-dog"></i><b><p>Raza:</p></b><p>Salvadoreña</p></div>   
         </div>
          <p>Bebuchita en una periita muy juguetona y activa. Se lleva muy bien con otros perros y es muy sociable con las personas. Es te talla mediana.
            <br><br>Ella es una de los 12 hijitos de Gigi, un rescate de Dame tu pata.</p>
        </div>
    </div>
    <br>
    <div class="form">
      <div class="importante">
        <h1>IMPORTANTE</h1>
        <p>Antes de llenar el formulario, es esencial que tome un momento para considerar la responsabilidad y el compromiso que implica la adopción de un perro. Los perros son seres vivos que requieren cuidado, 
          atención y amor a lo largo de sus vidas. Al adoptar, estás asumiendo la responsabilidad de brindarle un hogar seguro y amoroso, así como los cuidados veterinarios necesarios. Además, recuerda que la adopción 
          es un compromiso a largo plazo, y debes estar preparado para dedicar tiempo y recursos para el bienestar de tu nuevo compañero peludo. Por favor, tómese el tiempo necesario para reflexionar sobre esta decisión 
          y asegúrese de estar listo para brindarle a un perro una vida feliz y saludable. </p>
      </div>
      <div class="formulario">
        <h2>¿Deseas adoptar a Bebuchita?</h2>
        <br>
        <form action="https://formspree.io/f/mbjnbbgj" method="POST">
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
      <input class="form-control" type="text" name="Nombre" placeholder="Campo obligatorio" aria-label="default input example">
      </div>
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
      <input class="form-control" type="text" name="Telefono "placeholder="Campo obligatorio" aria-label="default input example">
      </div>
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Correo Electrónico</label>
        <input type="email" name="Email "class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">¿Por qué deseas adoptar?</label>
        <textarea class="form-control" name="Por que quiere adoptar" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit">Enviar</button>
      <p><i>Una vez recibida la solicitud se le contactara en el menor tiempo posible por medio de los contactos brindados en el fomulario*</i></p>
      </form>
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