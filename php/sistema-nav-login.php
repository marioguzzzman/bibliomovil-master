<?php  if (!isset($_SESSION['login'])) {
    // header('Location: login.php');
    include 'navbar.php';
} else {
  // $name =  $_SESSION[$name];
  $usuario = $_SESSION['usuario'];
  include 'navbar-login.php';
}?>
