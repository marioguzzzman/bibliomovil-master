<?php
session_start();

require 'helpers.php'; // funciones

$name = $_SESSION['registroExito']['name'];
$email = $_SESSION['registroExito']['email'];

// $name = $_POST['name'];
// $email = $_POST['email'];

?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmación </title>

    <link rel="stylesheet" href="../css/css-registr.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- <?php if (empty($_SESSION['errores'])):?>

  <?php  endif ?> -->


    <div class="container-fluid confirmacion">
      <!-- CONTAINER PRINCIPAL -->
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-3 col-lg-5 col-lg-offset-4">

          <header>
            <h1>¡Tu registro fue exitoso!</h1>
          </header>

        </div>
      </div>

          <div class="row">
            <!-- CONTAINER DE TEXTO -->
            <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-3 col-lg-5 col-lg-offset-4">
              <section class="texto-registro">
                <p>
                  <span>
                  Hola <strong><?php echo $name ?></strong>,

                  <!-- Hola <strong><?php echo $name ?></strong>, nos encanta la provincia de <strong>
                      <?php echo $_POST['provincias'] ?>.
                    </strong>
                  <br> -->
                  Te hemos registrado con el mail: <strong><?php echo $email ?></strong>.
                  <br>
                  <!-- Sabemos que te interesan las actividades de:
                  <br>
                  <strong>
                    <?php echo implode(", ", $_POST["actividad"]) ?>
                  </strong> -->
                  </p>
              <a href="../index.php" class="btn regbutton" role="button">Continuar</a>
              </section>
            </div>
          </div>
        </div>
        <!-- /CONTAINER DE TEXTO -->
      </div>

      <!-- /CONTAINER PRINCIPAL -->
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>

  </html>
