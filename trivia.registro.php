<?php
require 'php/clases/Trivia.php';
require_once 'soporte.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/css-registr.css">
  <link rel="stylesheet" href="css/navbar.css">



  <title>Registro Trivia</title>

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
  <?php  include 'php/sistema-nav-login.php'; ?>

    <div class="">
      <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
        <header>
        <legend><h2 style=margin-top:150px>Registro Trivia</h2></legend>
        </header>
      </div>
    </div>

    <div class="container-fluid-registro registro-body">

    <form action="php/trivia.controller.php" method="POST" class="register-form"  enctype="multipart/form-data">

      <!--CAMPOS PRINCIPALES-->

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only control-label" for="primer-nombre">pregunta</label>
          <!-- <input name="nombre" value="" class="form-control" type="text" id="nombre" placeholder="Nombre"> -->
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
            <input name="pregunta" value="<?php echo $pregunta ?>" class="form-control" type="text" placeholder="pregunta">
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only" for="email">ayuda</label>
          <!-- <input name="email" value="" class="form-control" type="email" placeholder="E-mail"> -->
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          <input name="ayuda" value="<?php echo $ayuda ?>" class="form-control" type="text" placeholder="ayuda">
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          </span>
        </div>
      </div>


      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">

          <select class="" name="categoria_id" id="categoria">
            <option value="1">Arte</option>
            <option value="1">Literatura</option>
            <option value="1">Música</option>
          </select>
      <!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          </span>
        </div>
      </div>

          <!-- /CAMPOS PRINCIPALES-->

          <!-- /CAMPOS PRINCIPALES-->




        <!-- BOTON -->
        <div class="row form-group">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
            <button class="btn btn-mg btn-block regbutton">Registrate</button>
          </div>
        </div>
        <!-- BOTON -->


    </form>



  </div>

  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
