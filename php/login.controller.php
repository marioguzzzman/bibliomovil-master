<?php
session_start();

// *********** FUNCIONES ***********
require 'helpers.php'; // archivo de funciones

$email = getUserByEmail ($_POST['email'], '../db/usuarios.json'); //funcion de recuperacion de usuario por email

function getUserBypassword ($password, $pathDB)
{
	$usuarios = getUsers($pathDB);
	$usuario = false;
	for($i=0;$i<count($usuarios); $i++){
		if($usuarios[$i]['password'] == $password){
			$usuario = $usuarios[$i];
			break;
		}
	}
	return $usuario;
}

// *********** DEBUG ***********

//este funciona pero no compara passwords hasheados
// var_dump($usuario  &&  $usuario['password']== $_POST['password']);

// *********** VALIDACION  ***********

//1) falta validar que el mail este en la base de datos

//2) PASSWORD sea correcto
//lo ue hay que hacer es hashear el password que entra y compararlo con el password hasheado en la base

//comparación de password nuevo y hash en $usuario
$hash = getUserBypassword($_POST['password'], '../db/usuarios.json');


// $passwordLogin = password_hash($_POST['password'], PASSWORD_DEFAULT);

if($email && password_verify($_POST['password'], $hash)) {
//si la comparación entre ambos passwords es verdadera entonces redirecciona a index y setea la SESSION como verdadera. Cuando la SESSION es true, se obtienen nuevas opciones en la navbar

//este funciona pero no compara passwords hasheados
// if($usuario && $usuario['password']== $_POST['password']) {

// *********** SESSION ***********

  $_SESSION['login'] = true;
  header('Location: ../index.php');
} else {
//volve a login e imprimi los datos ingresados no son correctos
   $_SESSION['backInputValues'] = "";
   $_SESSION['registroExito'] = $_POST;
  header('Location: ../login.php');
}
