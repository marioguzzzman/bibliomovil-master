<?php  if (!isset($_SESSION['login'])) {
    // header('Location: login.php');
    include 'navbar.php';
} else {
  // $name =  $_SESSION[$name];
  include 'navbar-login.php';
}?>
