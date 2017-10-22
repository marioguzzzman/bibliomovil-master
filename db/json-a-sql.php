<?php
    session_start();
    require_once("conexion.php");

  // $con = mysql_connect("root","root","") or die('Could not connect: ' . mysql_error());
  //  mysql_select_db("biblio-web", $con);

  //leer json
    $json = file_get_contents('usuarios2.json');

    //Convertir objeto json en array asociativo
    $jsonSQL = json_decode($json, true);

foreach ($jsonSQL as $key => $value) {
    //get datols
    // $id = [$key];
    $nombre = $jsonSQL[$key]['nombre'];
    $email = $jsonSQL[$key]['email'];
    $password = $jsonSQL[$key]['password'];
    $imagen = $jsonSQL[$key]['imagen'];


    //insert into mysql table
    // set the PDO error mode to exception
    $tabla = "INSERT INTO usuario(idusuario, nombre, email, password, imagen)
    VALUES ('','$nombre', '$email', '$password','$imagen')";
    //INSERT INTO = columnas
    // use exec() because no results are returned
    $conn->exec($tabla);
    echo "Se guardaron correctamente todos los datos"."<br />";
    }

$conn = null; // cierro conexion
