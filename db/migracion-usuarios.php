<?php
    session_start();
    require_once("conexion.php");

  // $con = mysql_connect("root","root","") or die('Could not connect: ' . mysql_error());
  //  mysql_select_db("biblio-web", $con);

  //leer json
    $json = file_get_contents('usuarios.json');

    //Convertir objeto json en array asociativo
    $usuariosData = json_decode($json, true);

foreach ($usuariosData as $key => $value) {
    //get datols
    // $id = [$key];
    $nombre = $usuariosData[$key]['nombre'];
    $email = $usuariosData[$key]['email'];
    $password = $usuariosData[$key]['password'];
    $imagen = $usuariosData[$key]['imagen'];


    //insert into mysql table
    // set the PDO error mode to exception
    $usuarioSql = "INSERT INTO usuario(idusuario, nombre, email, password, imagen)
    VALUES ('','$nombre', '$email', '$password','$imagen')";
    //INSERT INTO nombres de las columnas
    // use exec() because no results are returned
    $con->exec($usuarioSql);
    echo "New record created successfully";
    }



$con = null;
