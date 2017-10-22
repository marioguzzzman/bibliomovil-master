<?php

$host = 'localhost';
$base = 'biblio-web';
$usuario = 'root';
$password = 'root';
$dsn = "mysql:host=$host;dbname=$base;charset=utf8mb4;";



try { // solo puede capturar los errores que yo le diga
  //CONEXIÓN A LA BASE
  // $db = new PDO('mysql:host=MI_HOST;dbname=MI_BASE;charset=utf8mb4', 'MI_USUARIO', 'MI_CLAVE');
    $connDB = new PDO($dsn,$usuario, $password);
    $connDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //esta linea me permite ver los erroes de MYSQL
    // set the PDO error mode to exception
    //echo "Conetado a la base de datos";
    }
catch (PDOException $error) { //si ocurre el error entra al catch pero sino conincide sigue derecho

    echo "La conexion a la base de datos falló"; //. $e->getMessage();
    }
