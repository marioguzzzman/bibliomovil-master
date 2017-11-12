<?php

require_once 'connDB.php';
require_once 'Model.php';


class Trivia extends Model
{
    public $id;
    public $pregunta;
    public $ayuda;
    public $categoria_id;

    // public $connDB;

    public $fillable = ['pregunta', 'ayuda', 'categoria_id'];
    public static $tabla = 'trivias'; // propiedad estatica

}
