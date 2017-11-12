<?php
// require_once("../clases/ConnDB.php");
require '../clases/Usuario.php';
require '../clases/Trivia.php';

//******** PRIMERA PRUEBA DE PERSISTENCIA EN DB
// $usuario = new Usuario('bart', 'bart@mail.com', '1234', '10');
// $usuario->save();
//
// var_dump($usuario); //esto me devuelve el objeto
//

//******** PRUEBA DE BUSQUEDA DE TRIVIA EN DB
// $pelicula = Trivia::find(2);
// var_dump($pelicula); //esto me devuelve el objeto
// $pelicula->pregunta = 'nadie sabe sabe';
// $pelicula->save();

//******** PRUEBA DE BUSQUEDA DE USUARIO EN DB
$usuario = Usuario::find(2);
var_dump($usuario); //esto me devuelve el objeto
$usuario ->imagen=150;
$usuario->save();
