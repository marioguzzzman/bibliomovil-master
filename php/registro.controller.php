<?php //no debe quedar ningun espacio por encima, porque modifica al header
session_start(); //importante
define('DB_PATH', '../db/usuarios.json'); //path a base de datos
require 'helpers.php'; // archivo de funciones

//*********** VARIABLES ***********

$name = $email = $password = ""; // inicio las variables vacias

$errores = []; //incio array de errores


//*********** VISTAS DEBUG ***********
// var_dump($_POST);
// var_dump(json_encode($usuario));
// var_dump($errores);


//*********** FUNCION DE VALIDACION ***********

//*********** DUDAS
//Por algún motivo, aunque agregue esta función en los helpers, me tira un error el php ***********

function data_clean($data)
{
  //la función toma un dato y aplica diversos filtros
    $data = trim($data); //elmina espacios antes y despues de un string
    $data = stripslashes($data); //elimita las barras invertidas
    $data = htmlspecialchars($data); //sustituye caracteres de html por otra representacion equivalente. "" = &quot;
    return $data;
}

//*********** VALIDACIONES ***********

  if (empty($_POST['name'])):
    $errores['name'] = 'No olvides escribir tu nombre';
  elseif (!ctype_alnum($_POST['name'])): // si los caracteres no son alfanuméricos, el string es invalido
      $errores['name'] = 'No es posible ingresar caracteres especiales, solo números y letras';
    else :
      $name = data_clean($_POST['name']);
    endif;

  if (empty($_POST['email'])):
    $errores['email'] = 'No olvides escribir tu email';
      elseif (!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)):
    $errores['email'] = 'El email no es válido';
    else:
        $email = data_clean($_POST[ 'email']);
    endif;

// *********** PASSWORD
  if (empty($_POST['password'])):
    $errores['password'] = 'No olvides escribir tu password';
    // $passwordErr = "El password es obligatorio";
    else:
      $password = data_clean($_POST[ 'password']);
    endif;

    // if (empty($_POST["password_confirm"])):
    //   $errores['password_confirm'] = 'No olvides confirmar tu password';
    //   // $passwordErr = "El password es obligatorio";
    //   else :
    //     $password_confirm = data_clean($_POST[ 'password_confirm']);
    //   endif;


//*********** OTRAS VALIDACCIONES ***********

//ver si el NOMBRE ya existe
//if ($nombre = $usuario[$nombre]) { //mas o menos...
// 	($errores['name']) = 'Ese nombre ya existe';
// }

//ver si el MAIL ya existe
//if ($nombre = $usuario[$nombre]) { //mas o menos...
// 	($errores['nombre']) = 'Ese nombre ya existe';
// }
//
//   //intento de comparación de passwords
  //$password_confirm = trim($_POST['password_confirm']);
  // if (!$password == $password_confirm) {
  //     $errores['password_confirm'] = 'El password no coincide';
  //     echo $errores['password_confirm'];
  // }


//*********** VALIDACIÓN EN CLASE. EJEMPLOS ***********

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


// *********** CREAR USUARIO ***********

$usuario = [
    'name' => $name,
    'email' => $email,
    // 'password' => $password,
    'hash' => password_hash($password, PASSWORD_DEFAULT),
    // 'avatar' => $nombreCompleto,
    // 'preferencias' => ['arte', 'literatura', 'cine'],
];

// *********** CREAR IMAGEN ***********
// $imageName = uniqid();
// $imageName = uniqid();
// $nombreCompleto = guardarImagen('avatar', $imageName, '../images/');

// *********** LEER DB ***********

if (file_exists(DB_PATH)) {
  //Si existe la DB, leela.
  //La variable $usuarios corresponde a ese archivo
    $json = file_get_contents(DB_PATH);
    $usuarios = json_decode($json, true); // no olvidar el true
} else {
  //si no existe, crea en $usuarios un array vacio
    $usuarios = [];
}

//*********** GUARDAR USUARIO ***********

//Estoy teniendo un error en el archivo? porque no parece tener el formato adecuado?
$usuarios[] = $usuario; //en el array $usuarios, ingresa el $usuario creado
$json = json_encode($usuarios); //da formato json a $usuarios
file_put_contents(DB_PATH, $json); //escribilo en el archivo json

// *********** GUARDAR IMAGEN ***********

//guardarImagen($inputName, $imageName, $path);
//$nombre = uniqid();
// guardarImagen('avatar', $nombre, '../images/');




// *********** REDIRECCION
// No funciona si hay algun tipo de impresion en otra parte, porque también es un tipo de header?


// *********** SESSION ***********

 if ($errores) {
   //si hay errores volvemos a registro, los errores son impresos en una alerta y el array backInputValues envia por POST los elementos escritos anteriormente
     $_SESSION['errores'] = $errores;
     $_SESSION['backInputValues'] = $_POST;

     //  $_SESSION['validos'] = $validos;
     //  $_SESSION['aprobado'] = $_POST;
     header('Location: ../registro.php');
     exit;
 } else {
     //si todos los campos son completados corectamente nos dirige a confirmación y el array de errores y backInputValues vuelve a cero
     $_SESSION['errores'] = "";
     $_SESSION['backInputValues'] = "";
     $_SESSION['registroExito'] = $_POST;
     header('Location: confirmacion.php');
 }
