<?php //no debe quedar ningun espacio por encima, porque modifica al header
session_start(); //importante
// define('DB_PATH', '../db/usuarios.json');
require 'helpers.php';

//VARIABLES, inicio las variables vaias e incio variable de errores
$errores = [ ];
$name = $email = $pasword = "";
// $nameErr = $emailErr = $passwordErr = ""; //prueba de variables de error

//VISTAS DEBUG
// var_dump($_POST);
// var_dump(json_encode($usuario));
// var_dump($nameErr, $emailErr, $passwordErr);
// var_dump($errores);


//FUNCION DE VALIDACION
//***DUDAS:Por algún motivo, aunque agregue esta función en los helpers, me tira un error el php***
function data_clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = !preg_match("/^[a-zA-Z ]*$/", $data);
    return $data;
}

//VALIDACIONES
  if (empty($_POST['name'])):
    $errores['name'] = 'No olvides escribir tu nombre';
    // $nameErr = "El nombre es obligatorio";
    // ***DUDAS: por alguna razon no entra a esta validacion**

  // elseif (!preg_match("/^[a-zA-Z ]*$/", $name)):
  //    revisar si el nombre solo tiene letras y espacios
  //     $nameErr = "No es posible ingresar caracteres espciales";
  //     $errores['name'] = 'No es posible ingresar caracteres espciales';
    else :
      $name = data_clean($_POST[ 'name']);
    endif;

  if (empty($_POST['email'])):
    $errores['email'] = 'No olvides escribir tu email';
    // $emailErr = "El e-mail es obligatorio";

    // ***DUDAS: por alguna razon no entra a esta validacion**
      elseif (filter_var($email, FILTER_VALIDATE_EMAIL)):
    $errores['email'] = 'El email no es valido';
    // $emailErr = "El e-mail no es válido";
    else :
        $email = data_clean($_POST[ 'email']);
    endif;

  if (empty($_POST["password"])):
    $errores['password'] = 'No olvides escribir tu password';
    // $passwordErr = "El password es obligatorio";
    else :
      $password = data_clean($_POST[ 'password']);
    endif;

    if (empty($_POST["password_confirm"])):
      $errores['password_confirm'] = 'No olvides confirmar tu password';
      // $passwordErr = "El password es obligatorio";
      else :
        $password_confirm = data_clean($_POST[ 'password_confirm']);
      endif;

//OTRAS VALIDACCIONES
//ver si el NOMBRE ya existe
//if ($nombre = $usuario[$nombre]) { //mas o menos...
// 	($errores['nombre']) = 'Ese nombre ya existe';
// }

//ver si el MAIL ya existe
//if ($nombre = $usuario[$nombre]) { //mas o menos...
// 	($errores['nombre']) = 'Ese nombre ya existe';
// }

//intento de comparación de passwords
//$password_confirm = trim($_POST['password_confirm']);
// if (!$password == $password_confirm) {
//     $errores['password_confirm'] = 'El password no coincide';
//     echo $errores['password_confirm'];
// }

//VALIDACIÓN EN CLASE
//trim(string,charlist)
//Optional.If omitted, all of the following characters are removed: "\0" - NULL, "\t" - tab, "\n" - new line, "\x0B" - vertical tab, "\r" - carriage return, " " - ordinary white space

//versión previa al array de errores
// $email = trim($_POST['email']);
//  if (empty($email)) {
//    echo "El mail es obligatorio";
//  } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    echo "el mail no es valido";
//  }

//version con array
// $email = trim($_POST['email']);
// if (empty($email)) {
//     $errores['email'] = 'El email es obligatorio';
//     // echo $errores['email'];
// } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $errores['email'] = 'El email ingresado no es válido';
//     // echo $errores['email'];
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


// REDIRECCION
// No funciona si hay algun tipo de impresion en otra parte, porque también es un tipo de header?


//SESSION
// Agrego dos valores a sesion, los cuales se sólo si hay errores
 if ($errores) {
     $_SESSION['errores'] = $errores;
     $_SESSION['inputsValues'] = $_POST;
     header('Location: ../registro.php');
     exit;
 }
