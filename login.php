<!-- <?php
session_start(); ?> -->


<!-- falta agregar los mensajes de errore que vienen de POST -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/css-registr.css">
  <link rel="stylesheet" href="css/navbar.css">


  <title>Login</title>

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

  <?php include 'navbar.php'; ?>


  <div class="container-fluid">


    <!-- La cabecera no hace lo que deberia, le faltan el colore de fondo -->

    <div class="container login-box">

      <!-- LOGIN BOX -->

      <div class="login-logo">
        <!-- LOGIN LOGO -->

        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
            <img class="" src="img/Bibliomovil_logo_WHT.png" alt="Biblioteca del Congreso">
          </div>
        </div>
        <!-- LOGIN HEADER -->
      </div>

      <!-- RECUPERACION DE ARRAY DE ERRORES DESDE SESSION -->
      <!-- si hay data en array de errores, entonces crear row con impresion de los mensajes dentro del array -->
          <!-- <?php if (!empty($_SESSION['errores'])): ?>
              <div class="row">
                  <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                      <div class="alert alert-danger">
                          <?php foreach ($_SESSION['errores'] as $mensajesError): ?>
                              <p><?php echo $mensajesError; ?></p>
                          <?php endforeach ?>
                      </div>
                  </div>
              </div>
            <!-- <?php else: ?>
            <?php $name = $email = $pasword = $password_confirm = ""; ?> -->
          <?php endif ?> -->
      <!-- RECUPERACION DE ARRAY DE ERRORES DESDE SESSION -->

      <div class="container login-body">
        <!-- LOGIN BODY -->

        <form action="php/login.controller.php" method="POST" class="register-form">
          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
              <label class="sr-only" for="email">E-mail</label>
              <input name="email" value="" class="form-control" type="email" placeholder="E-mail">
              <span class="glyphicon glyphicon-envelope form-control-feedback">
              </span>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
              <label class="sr-only" for="password">Password</label>
              <input name="password" value="" class="form-control" type="password" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback">
              </span>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
              <h6>  <a href="login.php">¿Olvidaste tu contraseña?</a></h6>
            </div>
          </div>


          <div class="form-check col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
            <label class="form-check-label">
               <input class="form-check-input" type="checkbox"> Recuerdame
             </label>
          </div>

          <form class="form-inline" action="login.controller.php" method="POST">
            <div class="row form-group">
              <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                <button class="btn btn-block btn-mg logbutton">Entrar</button>
              </div>
            </div>
          </form>
        </form>
        <!-- LOGIN BODY -->
      </div>
      <!-- LOGIN BOX -->
    </div>

  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
