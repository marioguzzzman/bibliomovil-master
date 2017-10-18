<?php

$dsn = 'mysql:host=localhost;dbname=reglog;
charset=utf8mb4;port=3306';
$user ="root";
$pass = "root";

try {
  $db = new PDO($dsn, $user, $pass);
} catch (Exception $e) {
  echo "La conexion a la base de datos falló: " . $e->getMessage();
}


//
//
// $host = 'localhost';
// $base = 'usuarios.json';
// $usuario = 'root';
// $password = 'root';
// $dsn = "mysql:host=$host;dbname=$base;charset=utf8mb4;";
//
// try { // solo puede capturar los errores que yo le diga
//
//   //CONEXIÓN A LA BASE
//   // $db = new PDO('mysql:host=MI_HOST;dbname=MI_BASE;charset=utf8mb4', 'MI_USUARIO', 'MI_CLAVE');
//   $db = new PDO($dsn,$usuario, $password); // sin espacios
//     // echo 'estoy conectado';
// } catch (PDOException $e) { //si ocurre el error entra al catch pero sino conincide sigue derecho
//
// echo "La conexion a la base de datos falló: " . $e->getMessage();
//   // echo $e->getMessage();
// }
