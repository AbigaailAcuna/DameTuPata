<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dame Tu Pata - Donaciones</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/swiper-bundle.min.css">
    <link rel="icon" href="http://localhost/DameTuPata/assets/img/logos/logo.png" type="image/x-icon">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/DameTuPata/assets/css/principal.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="http://localhost/DameTuPata/assets/css/donaciones.css" rel="stylesheet" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
  
    <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>

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
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="?c=Principal&a=index">
                <h1 class="m-0">
                    <img src="http://localhost/DameTuPata/assets/img/logos/logo.png" class="logo"> Dame Tu Pata
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="?c=Principal&a=index" class="nav-item nav-link active">Inicio</a>
                    <a href="?c=Principal&a=adopciones" class="nav-item nav-link">Adoptar</a>
                    <a href="?c=Principal&a=donaciones" class="nav-item nav-link">Donar</a>
                    <a href="?c=Compras&a=index" class="nav-item nav-link">Tienda Solidaria</a>
                </div>
               
            </div>
        </div>
    </nav>

    <div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
        <div class="donation-container border border-danger bg-light">
                <div class="donation-title">Donaciones</div>
                <div class="donation-subtitle">Ayúdanos con nuestra misión.</div>

                <div class="bank-option border border-danger bg-light">
                    <div class="donation-text">Puedes hacerlo a través de nuestras cuentas bancarias</div>
                    <div class="bank-option-text">Banco ABC - Cuenta: XXXXXXXX</div>
                    <div class="bank-option-text">Banco XYZ - Cuenta: XXXXXXXX</div>
                    <div class="bank-option-text">Banco DEF - Cuenta: XXXXXXXX</div>
                </div>

                <div class="paypal-option" id="paypal-donate-button-container">
                    <div class="donation-text">Puedes hacerlo a través de Paypal</div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Formulario oculto para enviar datos de transacción de PayPal al servidor -->
    <form id="paypal-form" action="?c=Donacion&a=procesarTransaccion" method="POST" style="display: none;">
        <!-- Campos ocultos para los datos de la transacción -->
        <input type="hidden" name="tx" value="">
        <input type="hidden" name="amt" value="">
        <input type="hidden" name="cc" value="">
        <input type="hidden" name="st" value="">
    </form>

 
    <script>
        PayPal.Donation.Button({
            env: 'sandbox',
            hosted_button_id: 'F25V5A236C8HG',
            image: {
                src: 'https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif',
                title: 'PayPal - The safer, easier way to pay online!',
                alt: 'Donate with PayPal button'
            },
            onComplete: function(params) {
                console.log(params);
                var tx = params.tx;
                var amt = params.amt;
                var cc = params.cc;
                var st = params.st;
          
               // console.log(tx);
        
                document.getElementById('paypal-form').querySelector('[name="tx"]').value = tx;
                document.getElementById('paypal-form').querySelector('[name="amt"]').value = amt;
                document.getElementById('paypal-form').querySelector('[name="cc"]').value = cc;
                document.getElementById('paypal-form').querySelector('[name="st"]').value = st;
       

                document.getElementById('paypal-form').submit();

             console.log("si llega acá");
            },
        }).render('#paypal-donate-button-container');
    </script>
</body>

</html>
