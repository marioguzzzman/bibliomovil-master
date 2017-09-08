<?php


 var_dump($_POST);

// if ($_FILES ['avatar'] ['error'] == UPLOAD_ERR_OK){
//
//   $nombre = $_FILES['avatar'] ['name'] ;
//
//   move_uploaded_file ($_FILES[‘avatar’] [‘tmp_name’], '../images/' . $nombre);
// }
//
// RUTA
// // move_uploaded_file ($_FILES[‘avatar’] [‘tmp_name’], './images/') ;


//con esto el nombre no se repite
if ($_FILES ['avatar'] ['error'] == UPLOAD_ERR_OK){

  $nombre = uniqid();
  $ext = pathinfo($_FILES['avatar'] ['name']); //solo devuelve extension sin punto
  $_FILES['avatar'] ['name'] ;

  move_uploaded_file (
    $_FILES[‘avatar’] [‘tmp_name’],
    '../images/' . $nombre);
}



var_dump ($_FILES[‘avatar’] [‘tmp_name’] );


move_uploaded_file($path, $new_path);
