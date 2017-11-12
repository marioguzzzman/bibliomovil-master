<?php //no debe quedar ningun espacio por encima, porque modifica al header

require_once 'clases/Usuario.php';
require_once '../soporte.php';

// //DARO
// if ($auth->estaLogueado()) {
// 		header("Location:inicio.php");exit;
// 	}

//*********** CAMPOS FORMULARIO DEFAULT *********** // inicio las variables vacias
$emailDefault = "";
$nameDefault = "";

//*********** VALIDACION ***********
$errores = []; //incio array de errores

if ($_POST) {

		$errores = $validador->validarInformacion($_POST, $db);

    if (!isset($errores["name"])) {
			$nameDefault = $_POST["name"];
		}

    if (!isset($errores["email"])) {
			$emailDefault = $_POST["email"];
		}

		if (count($errores) == 0) {
			$usuario = new Usuario($_POST);
			$archivo = $usuario->guardarImagen();
      $usuario->imagen = $archivo;
			$usuario->save();
			// $usuario = $db->guardarUsuario($usuario);

			header("Location:../index.php?mail=" . $usuario->email);exit;
			// header("Location:../usuario-dashboard.php?mail=$mail");exit;
		}
	}


  // *******************************************************************************************

  // // *********** CREAR IMAGEN ***********
  // $imageName = uniqid();
  // $nombreCompleto = guardarImagen('avatar', $imageName, '../uploaded/');
  //
  // function guardarImagen($inputName, $imageName, $path)
  // {
  //   if ($_FILES[$inputName]['error'] == UPLOAD_ERR_OK) {
  //     $ext = pathinfo($_FILES[$inputName]['name'], PATHINFO_EXTENSION);
  //     move_uploaded_file(
  //       $_FILES[$inputName]['tmp_name'],
  //       $path.$imageName.'.'.$ext
  //     );
  //     return $imageName.'.'.$ext;
  //   }
  // }


//*********** FUNCION DE VALIDACION ***********
//
//
// function data_clean($data)
// {
//   //la función toma un dato y aplica diversos filtros
//     $data = trim($data); //elmina espacios antes y despues de un string
//     $data = stripslashes($data); //elimita las barras invertidas
//     $data = htmlspecialchars($data); //sustituye caracteres de html por otra representacion equivalente. "" = &quot;
//     return $data;
// }

//*********** VALIDACIONES ***********

//   if (empty($_POST['name'])):
//     $errores['name'] = 'No olvides escribir tu nombre';
//   elseif (!ctype_alnum($_POST['name'])): // si los caracteres no son alfanuméricos, el string es invalido
//       $errores['name'] = 'No es posible ingresar caracteres especiales, solo números y letras';
//     else :
//       $name = data_clean($_POST['name']);
//     endif;
//
//   if (empty($_POST['email'])):
//     $errores['email'] = 'No olvides escribir tu email';
//       elseif (!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)):
//     $errores['email'] = 'El email no es válido';
//     else:
//         $email = data_clean($_POST[ 'email']);
//     endif;
//
// // *********** PASSWORD
//   if (empty($_POST['password'])):
//     $errores['password'] = 'No olvides escribir tu password';
//     // $passwordErr = "El password es obligatorio";
//     else:
//       $password = data_clean($_POST[ 'password']);
//     endif;

    // if (empty($_POST["password_confirm"])):
    //   $errores['password_confirm'] = 'No olvides confirmar tu password';
    //   // $passwordErr = "El password es obligatorio";
    //   else :
    //     $password_confirm = data_clean($_POST[ 'password_confirm']);
    //   endif;
    //

    /*
      |------------------------------------------------------------------------->
      | OBJETOS
      |------------------------------------------------------------------------->
      |
      */
    /*

    if (!$errores) {
    //si no hay erores entonces guarda al usuario
    $usuario = new usuario($_POST['name'], $_POST['email'], $_POST['password'], '10');
    $usuario->save();
    }

  /*
    |------------------------------------------------------------------------->
    | FUNCIONES
    |------------------------------------------------------------------------->
    |
    */

  /*
    |--------------------------------------------------------------------------
    |  LEER DB
    |--------------------------------------------------------------------------
    |
  */

 /*
    if (file_exists(DB_PATH)) {
      //Si existe la DB en el path correspondiente, leela.
      //La variable $usuarios corresponde a ese archivo
        $json = file_get_contents(DB_PATH);
        $json = explode(PHP_EOL, $json); //concatena los enter que leiste dentro de json de nuevo
        foreach ($json as $key => $value) {
          //busca todas las claves de la base y haz que los valores sean las claves??
        $json[$key] = json_decode($value, true);// no olvidar el true

          //*********** VISTAS DEBUG ***********
          //var_dump($json[$value]);
          // echo "<br />";
        }

    } else {
      //si no existe, crea en $usuarios un array vacio
        $usuarios = [];
    }
  */


/*
  |--------------------------------------------------------------------------
  |  CREAR USUARIO FUNCION
  |--------------------------------------------------------------------------
  | Sustituimos la lógica de funciones por la de objetos respecto a crear usuario
  |PENDIENTE:
  |hacer un if en donde si todos los elementos estan validados y limpios, entonces se guarden y si no no.
*/

  /*
  $usuario = [
      'name' => $name,
      'email' => $email,
      // 'password' => $password,
      'hash' => password_hash($password, PASSWORD_DEFAULT),
      'avatar' => $nombreCompleto,
      // 'preferencias' => ['arte', 'literatura', 'cine'],
  ];
  */

/*
  |--------------------------------------------------------------------------
  |  GUARDAR USUARIO FUNCION
  |--------------------------------------------------------------------------
  |
  | Sustituimos la lógica de funciones por la de objetos respecto a guardar usuario
  |
  |
*/

  /*
  if (!$errores) {
  //si no hay erores entonces guarda al usuario
  $usuarios = $usuario; //en el array $usuarios, ingresa el $usuario creado
  $json = json_encode($usuarios); //da formato json a $usuarios
  file_put_contents(DB_PATH, $json . PHP_EOL, FILE_APPEND); //escribilo en el archivo json y agrega un enter al final
  }
  */




// *********** REDIRECCION
// No funciona si hay algun tipo de impresion en otra parte, porque también es un tipo de header?

// *********** SESSION ***********

 // if ($errores) {
 //   //si hay errores volvemos a registro, los errores son impresos en una alerta y el array restoreInputValues envia por POST los elementos escritos anteriormente
 //     $_SESSION['errores'] = $errores;
 //     $_SESSION['restoreInputValues'] = $_POST;
 //
 //     //  $_SESSION['validos'] = $validos;
 //     //  $_SESSION['aprobado'] = $_POST;
 //     header('Location: ../registro.php');
 //
 // } else {
 //     //si todos los campos son completados corectamente nos dirige a confirmación y el array de errores y restoreInputValues vuelve a cero
 //     $_SESSION['errores'] = "";
 //     $_SESSION['restoreInputValues'] = "";
 //    //  $_SESSION['registroExito'] = $_POST;
 //     $_SESSION['usuario'] = $usuario; // envio la variable usuario al resto de la pagina
 //
 //     header('Location: confirmacion.php');
 // }
