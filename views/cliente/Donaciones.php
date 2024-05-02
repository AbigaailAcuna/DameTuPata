<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dame Tu Pata - Donaciones</title>

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="http://localhost/DameTuPata/assets/css/donaciones.css" rel="stylesheet" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="http://localhost/DameTuPata/assets/js/compras.js"></script>
    <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>

</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="#!">Dame Tu Pata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="?c=Principal&a=index">Inicio</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="donation-container">
                    <div class="donation-title">Donaciones</div>
                    <div class="donation-subtitle">Ayúdanos con nuestra misión.</div>

                    <div class="bank-option">
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
