<?php
    session_start();
    require_once("conexion.php");

//BINDING TRANSACCION
//La idea es ejecutar varios sql en una consulta y se ejeute todo o nada

try{
  //Inicio transaccion
  $connDB->beginTransaction();

  //codigo SQL
  $connDB->exec('DELETE FROM usuario WHERE idusuario > 120');

  //fin de transaction
  $connDB->commit();
} catch(PDOException $error){

  echo 'Hubo un error';
  $connDB->rollBack();
}
