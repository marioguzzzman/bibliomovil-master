<?php
session_start();

// *********** FUNCIONES ***********
require 'helpers.php'; // archivo de funciones


$usuario = getUserByEmail ($_POST['email'], '../db/usuarios.json'); //funcion de recuperacion de usuario por email

$name = $usuario['name'];
$email = $usuario['email'];
$hash = $usuario['hash'];


// *********** DEBUG ***********

// var_dump($email, $hash); exit;
//

// *********** COOKIE  ***********
$_COOKIE;

// var_dump($value);

if ($_POST['recuerdame']) {
    $cookie_email = $usuario['email'];
    $cookie_hash = $usuario['hash'];

    setcookie("cookie_email", $cookie_email, time()+3600, "/");  /* expire in 1 hour */
    setcookie("cookie_hash",  $cookie_hash, time()+3600, "/");  /* expire in 1 hour //recordar ponerle el path*/


    // var_dump($_COOKIE);
}

// *********** VALIDACION  ***********

//1) falta validar que el mail este en la base de datos

//2) PASSWORD sea correcto
//lo ue hay que hacer es hashear el password que entra y compararlo con el password hasheado en la base

if($email && password_verify($_POST['password'], $hash)) {
//si la comparación entre ambos passwords es verdadera entonces redirecciona a index y setea la SESSION como verdadera. Cuando la SESSION es true, se obtienen nuevas opciones en la navbar

// *********** SESSION ***********

  $_SESSION['login'] = true; //seteo la sesion como verdadera
	$_SESSION['usuario'] = $usuario; // envio la variable usuario al resto de la pagina
  setcookie("cookie_hash", $cookie_email, time()+3600);

  header('Location: ../index.php');
	//revisar si esta COOKIE
} else {
//volve a login e imprimi los datos ingresados no son correctos
   $_SESSION['backInputValues'] = "";
  header('Location: ../login.php');
}
