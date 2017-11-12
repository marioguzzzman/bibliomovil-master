<?php
// session_start();
require_once 'soporte.php';
require_once 'php/clases/Usuario.php';

$usuarioLogueado = $auth->usuarioLogueado($db);

  $name = $usuarioLogueado->getName();
    $email = $usuarioLogueado->getEmail();
    // $imagen = $usuarioLogueado->getImagen();


// $descripcion [
//   'intereses' => 'arte'
//
//
// ];
//

$lectura = 10;
$escritura = 0;
$sabiduria = 5;

$nivel = [
  'lectura' => $lectura,
  'escritura' => $escritura,
  'sabiduria' => $sabiduria,
];

 $_SESSION['nivel'] = $nivel;

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil de usuario</title>

    <link rel="stylesheet" href="css/css-registr.css">
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


    <div class="container usuario">
      <div class="row">
        <br><br><br>
        <div class="col-md-4 col-md-offset-2">

          <!-- como hacemos que si no subio foto se agregue una por defatul? -->
          <img src="uploaded/<?php echo $usuario['avatar'] ?>" alt="Foto de <?php echo $usuario['name'] ?>">

        </div>

        <div class="col-md-4 ">
          <h1>Perfil de usuario</h1>

          <h3>Nombre: <?php echo $name?></h3>
          <h3>Email: <?php echo $email?></h3>
          <br>
          <p>
            A medida que realices actividades, explores la página, respondas las trivias y guardes tus propios cuentos interactivos, tu nivel de usuario se va a incrementar.
            <br><br> Actualmente tienes:
            <br> <br>Lectura:
            <span class="puntos"><?php echo '+ ' . $nivel['lectura'] ?></span>
            <br> Escritura:
            <span class="puntos"><?php echo '+ ' . $nivel['escritura'] ?></span>
            <br> Sabiduría:
            <span class="puntos"><?php echo '+ ' . $nivel['sabiduria'] ?></span>

          </p>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>

  </html>
