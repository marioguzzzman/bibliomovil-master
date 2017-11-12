<?php

require_once 'connDB.php';
require_once 'Model.php';


class Usuario extends Model
{
    public $id;
    public $nombre;
    public $email;
    public $password;
    public $imagen;

    public $fillable = ['name', 'email', 'password', 'imagen']; //Campos de la base de datos
    public static $tabla = 'usuarios'; // propiedad estatica
    // public $connDB;

    // public function __construct($nombre, $email, $password, $imagen) //El constructor se vuelve innecesario porque lo heredamos de model
    // {
    //     $this->nombre=$nombre;
    //     $this->email=$email;
    //     $this->password = $password;
    //     $this->imagen=$imagen;
    //
    //     // $this->connDB = new PDO('mysql:host=localhost;dbname=biblio-web;charset=utf8mb4;','root','root');
    // // $this->connDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //esta linea me permite ver los erroes de MYSQL
    // }


    // public function setPassword($value)
    // Sacamos set password para que no dependa del usuario
    // {
    //     //recibe el $pasword desde el contruct
    //     $this->password = password_hash($value, PASSWORD_DEFAULT);
    // }
    public function guardarImagen() {
    //ME FALTA ESTO
		$nombre=$_FILES["avatar"]["name"];
		$archivo=$_FILES["avatar"]["tmp_name"];

		$ext = pathinfo($nombre, PATHINFO_EXTENSION);

		$miArchivo = "../img/" . $this->email . "." . $ext;

		move_uploaded_file($archivo, $miArchivo);

    return $miArchivo;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setPassword($password) {
    $this->password = $password;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }


}
