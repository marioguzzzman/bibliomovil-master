<?php
// session_start();
require_once 'soporte.php';
require_once 'php/clases/Usuario.php';

if ($auth->estaLogueado()) {
		header("Location:index.php");exit;
	}

// $emailDefault = "";
// $nameDefault = "";
// //cual es esta forma?, una comparación?
// // $nameDefault = $_SESSION['restoreInputValues']['name'];
// $emailDefault = $_SESSION['restoreInputValues']['email'] ?? '';

$errores = $_SESSION['erroresLogin'];
?>

<!-- <?php

// *********** VALIDACION COOKIE ***********
// $email = "";
// $cookie_hash ="";

// var_dump($_COOKIE);

// if(!isset($_COOKIE['cookie_email'])) {

// // echo 'no esta la cookie';

// } else {

//   $email =  $_COOKIE['cookie_email'];
//   $cookie_hash =  $_COOKIE['cookie_hash'];
//
//   $usuario = getUserByEmail ($email, 'db/usuarios.json'); //funcion de recuperacion de usuario por email

//   if($email && $usuario['hash'] == $cookie_hash) {
  //si la comparación entre ambos passwords es verdadera entonces redirecciona a index y setea la SESSION como verdadera. Cuando la SESSION es true, se obtienen nuevas opciones en la navbar

// *********** SESSION ***********

//     $_SESSION['login'] = true; //seteo la sesion como verdadera
//   	$_SESSION['usuario'] = $usuario; // envio la variable usuario al resto de la pagina
//
//     header('Location: index.php');
//   	//revisar si esta COOKIE
//   }
// }

// echo $cookie_login['email'];
// echo $cookie_login['hash'];
// exit;
// ?>-->

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

  <div class="container-fluid-login">

    <div class="container login-box">

      <!-- LOGIN BOX -->
      <div class="login-logo">
        <!-- LOGIN LOGO -->

        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
            <img class="" src="img/Bibliomovil_logo_COLOR_1000x500.png" alt="Biblioteca del Congreso">
          </div>
        </div>
        <!-- LOGIN HEADER -->
      </div>


        <div class="container login-body">
        <!-- LOGIN BODY -->

        <?php if ($errores): ?>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                    <div class="alert alert-danger">
                      <?php foreach ($errores as $error) : ?>
                        <li>
                          <?=$error?>
                        </li>
                      <?php endforeach; ?>
                    </div>
                </div>
            </div>
          <?php endif ?>
        <!-- RECUPERACION DE ARRAY DE ERRORES DESDE SESSION -->

        <form action="php/login.controller.php" method="POST" class="register-form">
          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
              <label class="sr-only" for="email">E-mail</label>
              <input name="email" value="" class="form-control" type="email" placeholder="E-mail">
              <!-- <input name="email" value="<?php echo $email ?>" class="form-control" type="email" placeholder="E-mail"> -->
              <span class="glyphicon glyphicon-envelope form-control-feedback">
              </span>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
              <label class="sr-only" for="password">Password</label>
              <input name="password" value="" class="form-control" type="password" placeholder="Password">
              <!-- <input name="password" value="<?php echo $cookie_login['hash'] ?>" class="form-control" type="password" placeholder="Password"> -->
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
               <input class="form-check-input" type="checkbox" name="recordame" id="recordame"> Recuerdame
             </label>
          </div>

          <!-- <form class="form-inline" action="login.controller.php" method="POST"> -->
            <div class="row form-group">
              <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                <button class="btn btn-block btn-mg logbutton" name="login" value="login">Entrar</button>
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
