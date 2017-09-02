<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/css-registro.css">

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

  <div class="container-fluid">

    <?php include 'navbar.php'; ?>


<div class="container">


<!-- La cabecera no hace lo que deberia -->
  <div class="row">
    <div class="col-xs-6 col-xs-offset-3">
      <header>
      <img class="img-thumbnail" src="../img/logobcnmobile.png" alt="Biblioteca del Congreso">
      </header>
    </div>
  </div>

    <form action="" method="" class="register-form">

      <div class="row">
        <div class="col-xs-4 col-xs-offset-4 form-group">
          <label class="sr-only" for="email">E-mail</label>
          <input name="email" class="form-control" type="email" placeholder="E-mail">
        </div>
      </div>

      <div class="row">
        <div class="col-xs-4 col-xs-offset-4 form-group">
          <label class="sr-only" for="password">Password</label>
          <input name="password" class="form-control" type="password" placeholder="Password">
        </div>
      </div>

      <form class="form-inline" action="" method="post">
        <div class="row form-group">
                    <div class="col-xs-4 col-md-4 col-xs-offset-4">
              <button class="btn btn-block btn-mg logbutton">Entrar</button>
            </div>
        </div>
      </form>
    </form>

    </div>

    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
