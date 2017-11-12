<?php
    session_start();
    require_once("conexion.php");

  // $connDB = mysql_connect("root","root","") or die('Could not connect: ' . mysql_error());
  //  mysql_select_db("biblio-web", $connDB);

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
    $tabla = "INSERT INTO usuarios(id, nombre, email, password, imagen)
    VALUES ('','$nombre', '$email', '$password','$imagen')";
    //INSERT INTO = columnas

    $connDB->exec($tabla); // use exec() because no results are returned
    // echo "Se guardaron correctamente todos los datos"."<br />";
    // }

    $last_id = $connDB->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id."<br />";
  }


$connDB = null; // cierro conexion
