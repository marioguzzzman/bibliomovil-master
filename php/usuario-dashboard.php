<?php
session_start();

require 'php/helpers.php'; // archivo de funciones

var_dump($usuario); exit;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil de usuario</title>

    <link rel="stylesheet" href="css/usuario-dashboard.css">
    <link rel="stylesheet" href="css/navbar.css">

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


    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <img src="uploaded/<?php echo $usuario['avatar'] ?>" alt="">
        		<!-- <img src="images/<?php echo $usuario['avatar'] ?>"> -->
        </div>

        <div class="col-md-6">
          <h1>Perfil de usuario</h1>

          <h2><?php echo $usuario['name'] ?></h2>
        	<p><?php echo $usuario['email'] ?></p>
        	<p>
        		<!-- <img src="images/<?php echo $usuario['avatar'] ?>"> -->
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
