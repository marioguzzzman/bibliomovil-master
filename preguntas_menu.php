<?php
session_start();

require 'php/helpers.php'; // archivo de funciones

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Trivias Bibliomóvil</title>

  <link rel="stylesheet" href="css/trivias-menu.css">
  <link rel="stylesheet" href="css/navbar.css">

<!-- LICENCIAS DE DISEÑO
Diseño de imagenes
<a href="http://www.freepik.com">Designed by makyzz / Freepik</a>
<a href="http://www.freepik.com">Designed by Bamdewanto / Freepik</a> -->


  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- NAVEGACION-->
  <?php  include 'php/sistema-nav-login.php'; ?>

  <!--WRAPPER -->

  <div class="container">
    <!-- CONTAINER PRINCIPAL -->
    <br><br><br><br>


    <div class="row">
      <!-- ROW PRINCIPAL -->
      <header>
        <h1 class="display-1">¿Cuánto sabes sobre...?</h1>
      </header>

      <section class="imagen-izquierda">
        <div class="col-sx-2 col-md-4 col-md-offset-1">
          <!-- IMAGEN SIDE -->
          <img class="img-responsive" src="img/profesor.png" alt="Profesor">
          <!-- IMAGEN SIDE -->
        </div>
      </section>

      <section id=menu-trivias class="menu-trivias">
        <!-- CONTENEDOR DE ICONOS DE TRIVIAS -->
        <div class="col-md-7">
          <!-- CONTENEDOR DE ICONOS DE TRIVIAS -->

          <div class="row">
            <!-- PRIMERA FILA -->
            <div class="col-md-3">
              <a id="single_image1" href="../trivias/trivias-index/literatura.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/libro.png" alt="literatura" />
                </div>
              </a>

            </div>

            <div class="col-md-3">
              <a id="imagen1" href="../trivias/trivias-index/arte.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/libro.png" alt="literatura" />
                </div>
              </a>
            </div>

            <div class="col-md-3">
              <a id="single_image3" href="../trivias/trivias-index/bcn.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/bcn.png" alt="literatura" />
                </div>
              </a>
            </div>
            <!-- PRIMERA FILA -->
          </div>

          <div class="row">
            <!-- SEGUNDA FILA -->
            <div class="col-md-3">
              <a id="single_image5" href="../trivias/trivias-index/infantil.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/libro.png" alt="literatura" />
                </div>
              </a>
            </div>

            <div class="col-md-3">
              <a id="single_image6" href="../trivias/trivias-index/juvenil.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/juvenil.png" alt="literatura" />
                </div>
              </a>
            </div>

            <div class="col-md-3">
              <a id="single_image7" href="../trivias/trivias-index/musica.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/musica.png" alt="literatura" />
                </div>
              </a>
            </div>
            <!-- SEGUNDA FILA -->
          </div>

          <div class="row">
            <!-- TERCERA FILA -->
            <div class="col-md-3 col-md-offset-3">
              <a id="single_image4" href="../trivias/trivias-index/constitucion.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/constitucion.png" alt="literatura" />
                </div>
              </a>
            </div>
            <!-- TERCERA FILA -->
          </div>




          <!-- CONTENEDOR DE ICONOS DE TRIVIAS -->
        </div>
        <!-- CONTENEDOR DE ICONOS DE TRIVIAS -->
      </section>
      <!-- ROW PRINCIPAL -->
    </div>
    <!-- CONTAINER PRINCIPAL -->
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
