<?php

class connDB
{
    private static $connDB;

    public static function getConn()
    {
        if (!self::$connDB) { //usamos self porque trabajamos con atributos estáticos // si no hay nada, creo una conexión. Esto lo guardo en atributo estático conexión
            $db= new PDO('mysql:host=localhost;dbname=biblio-web;charset=utf8mb4;', 'root', 'root');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //esta linea me permite ver los erroes de MYSQL
            self::$connDB = $db;
        }
        return self::$connDB;
    }

    public function traerTodos() {

//******* DARO
		$query = self::getConn()->prepare("Select * from usuarios");
		$query->execute();

    $arrayFinal = [];

		$usuarios = $query->fetchAll();

    foreach ($usuarios as $usuario) {
      $arrayFinal[] = new Usuario($usuario);
    }

    return $arrayFinal;
  }
  public function traerPorMail($email) {

    //******* DARO
		$query = self::getConn()->prepare("Select * from usuarios where email = :email");
		$query->bindValue(":email", $email);

		$query->execute();

		$usuario = $query->fetch();

    if ($usuario != null) {
      return new Usuario($usuario);
    }
    else {
      return null;
    }
  }

}


//DB::getConn(); //Con esta línea ejecuto la acción
