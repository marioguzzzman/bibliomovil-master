<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmación </title>

    <link rel="stylesheet" href="css/css-registr.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container confirmacion">

      <div class="row">

        <div class="col-xs-7 col-xs-offset-4">

          <?php if ($_GET): ?>

          <header>
            <h1>¡Espectacular!</h1>
          </header>

          <p>
            <span>
                  Hola <strong><?php echo $_GET['nombre'] ?></strong>, nos encanta la provincia de <strong>
                      <?php echo $_GET['provincias'] ?>.
                    </strong>
                  <br>
                  Te hemos registrado con <strong><?php echo $_GET['email'] ?></strong>.
                  <br>
                  Sabemos que te interesan las actividades de:
                  <br>
                  <strong>
                    <?php echo implode(", ", $_GET["actividad"]) ?>
                  </strong>
              <br><h3>Gracias por registrarte</h3>
              </span>

          </p>
          <?php endif; ?>

        </div>

      </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
