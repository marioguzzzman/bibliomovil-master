<?php
require_once '../soporte.php';
$auth->logout();
header("Location:../index.php");exit;

// session_start();
//
// if (isset ($_SESSION['login'])) {
//   session_destroy();
//   header('Location: ../index.php');
// }

?>
