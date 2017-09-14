<?php
session_start();
// define('DB_PATH', '../db/usuarios.json');

include 'helpers.php';


// $errores = [
//
// ];
//REDIRECCION
// if ($errores) {
//     header('Location: ../registro.php');
// }
//  else {
//   header('Location: ../confirmacion.php');
// }


//VISTAS DEBUG
// var_dump($_POST);
// foreach ($errores as $key => $value) {
//     var_dump($key);
// }
// var_dump($json);
// var_dump(password_verify($_POST['password'], $usuario['password']));ss
 // var_dump(json_encode($usuario));


//OTRA FORMA DE VALIDACION CON FUNCIONES

// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $pasword = "";

    if(empty($_POST['name'])):
        header('Location: ../registro.php?error = Name+missing');
        exit();

  // if (empty($_POST["name"])):
  //   $nameErr = "Name is required";
  // elseif (!preg_match("/^[a-zA-Z ]*$/",$name)):
  //   // check if name only contains letters and whitespace
  //     $nameErr = "Only letters and white space allowed";
    else :
      $name = test_input($_POST[ 'name']);
    endif;




var_dump($nameErr);


    // if (empty($_POST["email"])) {
    //     $emailErr = "Email is required";
    // } else {
    //     $email = test_input($_POST["email"]);
    // }
    //
    //
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


//VALIDACIÓN
//trim(string,charlist)
//Optional.If omitted, all of the following characters are removed: "\0" - NULL, "\t" - tab, "\n" - new line, "\x0B" - vertical tab, "\r" - carriage return, " " - ordinary white space

//versión previa al array de errores
// $nombre = trim($_POST['name']);
// if (empty($nombre)) {
//   echo "El nombre es obligatorio";
// }

// $nombre = trim($_POST['nombre']);
// if (empty($nombre)) {
//     $errores['nombre'] = 'El nombre es obligatorio';
//     // echo $errores['nombre'];
// }

// podriamos ver si el usuario ya existe
//if ($nombre = $usuario[$nombre]) { //mas o menos...
// 	($errores['nombre']) = 'Ese nombre ya existe';
// }

//versión previa al array de errores
// $email = trim($_POST['email']);
//  if (empty($email)) {
//    echo "El mail es obligatorio";
//  } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    echo "el mail no es valido";
//  }

// $email = trim($_POST['email']);
// if (empty($email)) {
//     $errores['email'] = 'El email es obligatorio';
//     // echo $errores['email'];
// } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $errores['email'] = 'El email ingresado no es válido';
//     // echo $errores['email'];
// }
//
// $password = trim($_POST['password']);
//
// if (empty($password)) {
//     $errores['password'] = 'El password es obligatorio';
//     // echo $errores['password'];
// }

//intento de comparación de passwords
//$password_confirm = trim($_POST['password_confirm']);
// if (!$password == $password_confirm) {
//     $errores['password_confirm'] = 'El password no coincide';
//     echo $errores['password_confirm'];
// }


//CREAR IMAGEN
// $imageName = uniqid();
// $imageName = uniqid();
// $nombreCompleto = guardarImagen('avatar', $imageName, '../images/');

//CREAR USUARIO
// $usuario = [
//     'nombre' => $nombre,
//     'email' => $email,
//     'password' => $password,
  // 'password_confirm' => $password_confirm

    // 'password' => password_hash($password, PASSWORD_DEFAULT),
    //'avatar' => $nombreCompleto
    //preferencias' => ['css', 'php', 'js'],

// ];

//GUARDAR IMAGEN
//guardarImagen($inputName, $imageName, $path);
//$nombre = uniqid();
// guardarImagen('avatar', $nombre, '../images/');

//GUARDAR USUARIO
// $usuarios[] = $usuario;
// $json = json_encode($usuarios);
// file_put_contents(DB_PATH, $json);
