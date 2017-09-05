<?php

$provincias = [
  'China', 'India','Estados Unidos',
  'Indonesia', 'Brasil', 'Pakistán', 'Nigeria', 'Bangladés','Finlandia'
];
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/css-registr.css">
  <link rel="stylesheet" href="css/main-main.css">


  <title>Registro</title>

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
  <div class="container-fluid">

    <?php include 'navbar.php'; ?>

    <!-- La cabecera no hace lo que deberia, le faltan el colore de fondo -->

    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
        <header>
          <h2>Registro</h2>
        </header>
      </div>
    </div>

    <form action="php/confirmacion.php" method="GET" class="register-form">

      <!--CAMPOS PRINCIPALES-->

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only control-label" for="primer-nombre">Nombre y Apellido</label>
          <input name="nombre" value="" class="form-control" type="text" id="nombre" placeholder="Nombre" required>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only" for="email">E-mail</label>
          <input name="email" value="" class="form-control" type="email" placeholder="E-mail">
        </div>
      </div>

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only" for="password">Password</label>
          <input name="password" value="" class="form-control" type="password" placeholder="Password">
        </div>
      </div>
      <!-- /CAMPOS PRINCIPALES-->


      <div class="row">
        <!-- SEXO    /REVISAR FUNCIONAMIENTO/ tienen que tener id diferente-->
        <div class="form-check col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="form-check-label"> <h4>Género</h4>
          <input class="form-check-input" type="radio" id="genero" name="genero" value="masculino">
          Otro
          <input class="form-check-input" type="radio" id="genero2" name="genero" value="femenino">
          Maculino
          <input class="form-check-input" type="radio" id="genero3" name="genero" value="otro">
          Femenino

        </label>
        </div>
        <!-- /SEXO-->
      </div>

      <div class="row">
        <div class="form-check col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">

        <select name="paises">
          <option selected>¿En que provincia vives?</option>
        <?php
          foreach ($provincias as $key => $value) {?>
          <option value=<?php echo $key?>>
            <?php echo $value?></option>
        <?php
          }
        ?>
      </div>

        </select>

      </div>

      <div class="row">
        <div class="form-check col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <hr>
        </div>
      </div>

      <div class="row">
        <!-- ACTIVIDADES-->
         <!-- for coincide con id input-->
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="form-check-label">
          <h4>¿Qué actividades te interesan?</h4>
          </label>
          <br/>
            <input class="form-check-input" id="literatura" name="actividad[]" type="checkbox" value="literatura">
            <label for="literatura" class="form-check-label">         <!-- for coincide con id input-->
              Literatura
            </label>

            <input class="form-check-input" id="arte" name="actividad[]" type="checkbox" value="arte">
            <label for="arte" class="form-check-label">         <!-- for coincide con id input-->
              Arte
            </label>

            <input class="form-check-input" id="cine" name="actividad[]" type="checkbox" value="cine">
            <label for="cine" class="form-check-label">         <!-- for coincide con id input-->
              Cine
            </label>

            <input class="form-check-input" id="narracion" name="actividad[]" type="checkbox" value="naraccion">
            <label for="narracion" class="form-check-label">         <!-- for coincide con id input-->
              Narración
            </label>

            <input class="form-check-input" id="otras" name="actividad[]" type="checkbox" value="otras">
            <label for="otras" class="form-check-label">         <!-- for coincide con id input-->
              Otras
            </label>

        </div>
        <!--/ACTIVIDADES -->
      </div>


      <div class="row">
        <!-- ENCUESTA -->
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <select class="custom-select">
            <option selected>¿Cuántos libros lees por año?</option>
            <option value="0">Ninguno</option>
            <option value="1">Uno a cinco</option>
            <option value="2">Cinco a diez</option>
            <option value="3">Más de diez</option>
        </select>
        </div>
        <!-- /ENCUESTA -->
      </div>


      <form class="form-inline" action="" method="post">
        <!-- BOTON -->
        <div class="row form-group">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
            <button class="btn btn-mg btn-block regbutton">Registrate</button>
          </div>
        </div>
        <!-- BOTON -->
      </form>


    </form>


  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
