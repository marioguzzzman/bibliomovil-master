<?php
// session_start();
require_once 'soporte.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inicio</title>

  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/main2.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] -->
</head>

<body>

<?php  include 'php/sistema-nav-login.php'; ?>


  <div class="container-fluid">

    <!-- /CONTAINER GENERAL!-->
  </div>


  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#bs-carousel" data-slide-to="1"></li>
      <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"></div>
        <div class="hero">
              <img src="img/Bibliomovil_logo_COLOR_1000x500.png" alt="Bibliomovil" width=350px padding-bottom=50px>
              <h4>Un proyecto de la biblioteca del congreso</h4>
          <a href="#home"><button class="btn btn-hero btn-lg" role="button">Adelante</button></a>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-2"></div>
        <div class="hero">
          <hgroup>
              <img src="img/Bibliomovil_logo_COLOR_1000x500.png" alt="Bibliomovil" width=350px padding-bottom=50px z-index=300>
              <h4>Un proyecto de la biblioteca del congreso</h4>
          </hgroup>
          <a href="#home"><button class="btn btn-hero btn-lg" role="button">Adelante</button></a>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-3"></div>
        <div class="hero">
          <hgroup>
              <img src="img/Bibliomovil_logo_COLOR_1000x500.png" alt="Bibliomovil" width=350px padding-bottom=50px>
              <h4>Un proyecto de la biblioteca del congreso</h4>
          </hgroup>
          <a href="#home"><button class="btn btn-hero btn-lg" role="button">Adelante</button></a>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="row linea">
        <div class="col-xs-8 col-xs-offset-2">
          <hr>
        </div>
        </div> -->

  <div class="container"><a name="home"></a>
    <section id="info">
      <!-- INFORMACIÓN GENERAL!-->
      <div class="row info main">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


          <img class="img-responsive logo" src="img/logo_home_1000x1000.png" alt="Mapa de Argentina">

          <div class="col-xs-12 col-sm-4 col-md-4">
<!-- MAPA / con img-responsive, la imagen ocupa el espacio jsuto del  de la columna-->

            <img class="img-responsive" src="img/mapa_ARG-colors.png" alt="Mapa de Argentina">

<!-- /MAPA-->
          </div>

          <div class="col-xs-12 col-sm-8 col-md-8">
<!-- INFORMACION BIBLIO-->

            <h2>¿Qué es el Bibliomóvil?</h2>

            <article class="que-es">
              <p class="">El <b>Bibliomóvil</b> es un proyecto de la <b>Biblioteca del Congreso de la Nación</b> que tiene como propósito incentivar la lectura, la escritura, la producción artística y el conocimiento a través del territorio argentino con el apoyo
                de un ómnibus de doble altura acondicionado como biblioteca, un grupo de docentes especializados e instrumentos tecnológicos.
                <br>
                <br> El Bibliomóvil cuenta con:
                <br> Una <b>sala de lectura</b> con más de 5,000 libros, una Biblioteca Federal, una de Pueblos Originarios, la de la Memoria y una de Capacitación Docente, entre otras.
                <br> Una <b>sala de escritura</b> e informática equipada con diez computadoras provistas de juegos pedagógicos, cuentos interactivos y propuestas de escritura creativa, así como visitas virtuales al Congreso y muchás otras actividades tecnológicas.
              </p>
            </article>
            <!-- /INFORMACION BIBLIO-->
          </div>

        </div>
      </div>
      <!-- /INFORMACIÓN GENERAL!-->
    </section>
  </div>

  <!-- <div class="row linea">
        <div class="col-xs-8 col-xs-offset-2">
          <hr>
        </div>
        </div> -->

  <div class="container">
    <section id="servicios">
      <!--SERVICIOS!-->
      <div class="row servicios">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2>Servicios</h2>

          <div class="row">
            <!--CONTENIDO SERVICIOS!-->

            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <span class="glyphicon glyphicon-education  glyphicon-large" aria-hidden="true">
              </span>
              <h3>Acercar la Biblioteca al público</h3>
              <p>En el Bibliomóvil de la BCN llevan a cabo actividades para escuelas, bibliotecas, profesorados, centros culturales y público general.
              </p>
            </article>

            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <span class="glyphicon glyphicon-pencil glyphicon-large" aria-hidden="true">
              </span>
              <h3>Promoción de la lectura y la escritura</h3>
              <p>A partir de búsquedas bibliográficas, lectura de poesía, narración y actividades que permiten relacionar la escritura creativa con medios digitales.
              </p>
            </article>

            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <span class="glyphicon glyphicon-film glyphicon-large" aria-hidden="true">
                </span>
              <h3>Actividades culturales y artísticas locales</h3>
              <p>Destinadas a promover la producción de escritores y artistas locales generando situaciones que fortalezcan la cultura provincial dentro en el contexto nacional.
              </p>
            </article>

            <!--/CONTENIDO SERVICIOS!-->
          </div>

        </div>

      </div>
      <!--SERVICIOS!-->
    </section>
  </div>

  <!-- <div class="row linea">
        <div class="col-xs-10 col-xs-offset-1">
          <hr>
        </div>
        </div> -->

  <div class="container">
    <section id="historia">
      <!--HISTORIA!-->
      <div class="col-md-6 col-md-offset-3 historia">
        <h2>Historia</h2>

        <ul class="timeline">

          <li class="timeline">
            <div class="img-responsive">
              <!-- <img src="img/pond.jpg" alt=""> -->
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">1974</h4>
                <!--<p><small class="text-muted"><i class="fa fa-clock-o"></i> 22:29:22</small></p>/!-->
              </div>
              <div class="timeline-body">
                <p>Se inaugura la nueva Sala Pública de Lectura en el edificio de Alsina 1835.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge warning"><i class="fa fa-bullseye"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">2001</h4>
              </div>
              <div class="timeline-body">
                <p>Recibe el premio “Access to Learning” otorgado por la Fundación Bill & Melinda Gates por el amplio horario de atención al público, la gratuidad de sus servicios y el libre acceso a internet.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge danger"><i class="fa fa-crosshairs"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">2002</h4>
              </div>
              <div class="timeline-body">
                <p>Se crea el Bibliomóvil (Biblioteca Móvil Multimodal) con el fin educativo de incentivar la lectura y el intercambio cultural entre las distintas provincias del país y el Congreso de la Nación.</p>
              </div>
            </div>
          </li>
          <li class="timeline">
            <div class="timeline-badge success"><i class="fa fa-thumbs-o-down"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">2007</h4>
              </div>
              <div class="timeline-body">
                <p> En la actualidad el Bibliomóvil ha recorrido más de 250.000 Kilmétros, desde Ushuaia hasta la Quiaca. Continuamente se realizan actualizaciones. Se crea la página web Bibliomóvil Interactivo, que permite acercar las actividades de manera
                  simultánea a toda la república Argentina.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!--/HISTORIA!-->
    </section>
  </div>

  <!-- <div class="row linea">
        <div class="col-xs-8 col-xs-offset-2">
          <hr>
        </div>
        </div> -->

  <!-- <div class="container">
    <section id="equipo">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2>Equipo</h2>

        </div>
      </div>
    </section>
  </div> -->

  <!-- <div class="row linea">
        <div class="col-xs-8 col-xs-offset-2">
          <hr>
        </div>
        </div> -->

  <div class="container">
    <section id="faq">
      <!-- PREGUNTAS FRECUENTES!-->
      <div class="row faq">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
          <h2>Preguntas Frecuentes</h2>
          <div class="panel-group" id="accordion">


            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
    ¿Cuántos kilómetros ha recorrido el Bibliomóvil?</a>
  </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">El Bibliomóvil ha recorrido más de 250,000 km, y visitado a provincias de todo el territorio nacional, desde la Quiaca hasta Tierra del Fuego.</div>
              </div>
            </div>


            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
    ¿Qué otras actividades se realizan en el Bibliomóvil?</a>
  </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body"><b>Arte Callejero</b>: simultáneamente a las actividades desarrolladas con escuelas o público general, artistas locales realizan murales en vivo en la inmediaciones del Bibliomóvil.<br><br>

                  <b>Café literario</b>: encuentros vespertinos y/o nocturnos con escritores locales a fin de compartir lecturas, reflexiones críticas de la literatura e intercambio de opiniones sobre modalidades de organización editorial.<br><br>

                  <b>Encuentros de narración y poesía</b>: reuniones en el Bibliomóvil para narradores y escritores locales que, a partir del intercambio de experiencias y producción, posibilitan el conocimiento de literaturas regionales ignoradas por
                  el mercado editorial.</div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
  ¿Cuáles son las condiciones para la visita del Bibliomóvil?</a>
  </h4>
              </div>
              <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">Las instituciones o autoridades interesadas en solicitar la visita del Bibliomóvil deberán enviar: <br><br> 1- Nota dirigida a la Sra. Presidenta de la Comisión Administradora de la Biblioteca del Congreso, Diputada de la Nación Teresa
                  García.<br> 2- Nota dirigida al Director Coordinador General de la BCN, Sr. Alejandro Santa.<br> En ambas notas se deberá consignar el motivo de la solicitud, la/s localidad/es interesadas y el nombre de una persona responsable con quien
                  se establecerá contacto para determinar los distintos aspectos del acuerdo.</div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
Más información</a>
  </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">Dirección Coordinación General <br><br> Adolfo Alsina 1835 piso 4<br> Horario: lunes a viernes de 8 a 18 h<br> Directo: (011) 4378-5513<br> Conmutador: (011) 4378-5600<br> coordinacion@bcn.gob.ar
                  <br>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
      <!-- /PREGUNTAS FRECUENTES!-->
    </section>
  </div>

<?php include 'footer.php' ?>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
