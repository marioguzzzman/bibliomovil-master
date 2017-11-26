<?php
// session_start();
require_once '../soporte.php';
if ($auth->estaLogueado()) {
		header("Location:../index.php");
	}


$errores = [];
if ($_POST) {
  $errores = $validador->validarLogin($_POST, $db);
$_SESSION['erroresLogin'] = $errores;
  header("Location:../login.php");

  if (count($errores) == 0) {
    // LOGUEAR
    $auth->loguear($_POST["email"]);
    // if (isset($_POST["recordame"])) {
    //   //Quiere que lo recuerde
    //   $auth->recordame($_POST["email"]);
    // }
    header("Location:../index.php");
  }
}
// *********** FUNCIONES ***********
// require 'helpers.php'; // archivo de funciones
//
// if($_POST){
//   $usuario = getUserByEmail($_POST['email'], '../db/usuarios.json'); //funcion de recuperacion de usuario por email
//   $name = $usuario['name'];
//   $email = $usuario['email'];
//   $hash = $usuario['hash'];


  // *********** COOKIE  ***********
  // $_COOKIE;

  // var_dump($value);

  // *********** VALIDACION  ***********

  //1) falta validar que el mail este en la base de datos

  //2) PASSWORD sea correcto
  //lo ue hay que hacer es hashear el password que entra y compararlo con el password hasheado en la base

//   if($email && password_verify($_POST['password'], $hash)) {
//   //si la comparación entre ambos passwords es verdadera entonces redirecciona a index y setea la SESSION como verdadera. Cuando la SESSION es true, se obtienen nuevas opciones en la navbar
//
//   // *********** SESSION ***********
//
//     $_SESSION['login'] = true; //seteo la sesion como verdadera
//   	$_SESSION['usuario'] = $usuario; // envio la variable usuario al resto de la pagina
//
//     if (isset ($_POST['recuerdame'])) {
//         $cookie_email = $usuario['email'];
//         $cookie_hash = $usuario['hash'];
//
//         setcookie("cookie_email", $cookie_email, time()+3600, "/");  /* expire in 1 hour */
//         setcookie("cookie_hash",  $cookie_hash, time()+3600, "/");  /* expire in 1 hour //recordar ponerle el path*/
//         // var_dump($_COOKIE);
//     }
//
//     header('Location: ../index.php');
//   	//revisar si esta COOKIE
//   } else {
//   //volve a login e imprimi los datos ingresados no son correctos
//      $_SESSION['backInputValues'] = "";
//     header('Location: ../login.php');
//   }
// }
