<?php
require_once 'soporte.php';


if (!$auth->estaLogueado()) {
    // header('Location: login.php');
    include 'navbar.php';
} else {
  // $name =  $_SESSION[$name];
  include 'navbar-login.php';
}
