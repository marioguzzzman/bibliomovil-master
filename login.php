<?php
session_start();

if(!isset($_COOKIE[$cookie_login])) {
  $cookie_login = "";
} else {
    $cookie_login = $_COOKIE[$cookie_login];
}

echo $cookie_login['email'];
echo $cookie_login['hash'];
exit;
?>


<!-- <?php echo $cookie_login['email'] ?>
<?php echo $cookie_login['hash'] ?> -->



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
  <?php  include 'php/sistema-nav-login.php'; ?>



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

        <div class="container login-body">
        <!-- LOGIN BODY -->

        <form action="php/login.controller.php" method="POST" class="register-form">
          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
              <label class="sr-only" for="email">E-mail</label>
              <input name="email" value="<?php echo $cookie_login['email'] ?>" class="form-control" type="email" placeholder="E-mail">
              <span class="glyphicon glyphicon-envelope form-control-feedback">
              </span>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
              <label class="sr-only" for="password">Password</label>
              <input name="password" value="<?php echo $cookie_login['hash'] ?>" class="form-control" type="password" placeholder="Password">
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
               <input class="form-check-input" type="checkbox" name="recuerdame" id="recuerdame"> Recuerdame
             </label>
          </div>

          <!-- <form class="form-inline" action="login.controller.php" method="POST"> -->
            <div class="row form-group">
              <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                <button class="btn btn-block btn-mg logbutton" name="login" value="Login">Entrar</button>
              </div>
            </div>
          <!-- </form> -->
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
