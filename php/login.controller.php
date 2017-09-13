<?php
session_start();

include 'helpers.php';

$usuario = getUserByEmail ($_POST['email'], '../db/off.json');


// var_dump($usuario  &&  $usuario['password']== $_POST['password']);

if($usuario && $usuario['password']== $_POST['password']) {

  $_SESSION['login'] = true;
  header('Location: ../index.php');
} else {
  header('Location: ../login.php');
}
