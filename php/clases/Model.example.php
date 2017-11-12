<?php

require_once 'connDB.php';

/**
 * Plantilla que relaciona propiedades del objeto a tabla
 */
class Model // extends AnotherClass
{
    // protected $fillable = ['']; //Protegido para que sea accesible a las clases hijas, quienes van a definirla. Representa los campos de las tablas de la base de datos.

    public function __construct($data)
    {
        $this->toModel($data); //Usamos la misma estructura en ToModel, vamos a solamente instanciarlo
    }

    public function save()
    {
        // $sql = 'INSERT INTO usuarios (id, nombre, email, password, imagen) VALUES (:id, :nombre,:email,:password,:imagen)'; //Sentencia previa a la lógica de Objetos
        // $stmt = $this->connDB->prepare($sql); // Conxión previa a objetos

        $sql = ($this->id)?$this->update():$this->insert(); //Si tengo id hago un update, sino un insert
        $stmt = connDB::getConn()->prepare($sql);

        foreach ($this->fillable as $column) { //itera sobre los campos que pueden ser editados
          $stmt->bindvalue(":$column", $this->$column); //Recupera el nombre de columna en la tabla y la transfiere a las propiedades del objeto
        }
        //El for each anterior equivale a lo siguiente:
        // $stmt->bindvalue(':id ', '', PDO::PARAM_INT);
        // $stmt->bindvalue(':nombre', $this->nombre, PDO::PARAM_STR);
        // $stmt->bindvalue(':email', $this->email, PDO::PARAM_STR);
        // $stmt->bindvalue(':password', $this->password, PDO::PARAM_STR);
        // $stmt->bindvalue(':imagen', $this->imagen, PDO::PARAM_STR);
        $stmt->execute();
    }

    private function insert()
    {
        $columns = implode(', ', $this->fillable);
        $placeholders = ':'.implode(', :', $this->fillable);
        return "INSERT INTO ".static::$tabla." ($columns) VALUES ($placeholders)";
    }

    private function update()
    {
        $set = '';
        foreach ($this->fillable as $column) {//Genera la estructura de la sentencia sql
            $set .= "$column=:$column,";
        }
        $set = trim($set, ","); //El segundo parametro espero el signo que cortará el principio y al final
        return "UPDATE ".static::$tabla." SET $set WHERE id = ".$this->id;
    }

    public static function find($id)
    {   // Descripción del código abajo:
        // Al ser estático, perdemos el this porque no se puede instanciar
        // Self va a buscar dentro de la clase Model, aunque lo use el hijo.
        // $table no va a estar en model, sino en hijo, así que vamos a usar la palabra static::$table que hace referencia a quien esta usando el método.

        $sql = 'SELECT * FROM '.static::$tabla.' WHERE id = :id';
        $stmt = connDB::getConn()->prepare($sql);
        $stmt->bindvalue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        //Estamos haciendo un array asociativo para poder reutilizar el código
        //El resultado que devuelve la conexción puede representar se otras maneras, pero no es un objeto del tipo Usuario, sólo genérico.
        //Pero necesitamos que los datos de las columnas pasen a formar parte del objeto Usuario
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // $class = get_class( $usuario); //get_class( $usuario) devuelve el nombre de la clase del objeto en cuestion, podriamos poner $this-> si no fuera estático
        // En lugar de lo anterior utilizamos:
        $class = get_called_class(); //get_called_class() devuelve el nombre de la clase que esta llamando el método

        // $usuario = new $class('', '', '', 0); // Creamos un usuario vacío, le pasamos parametros porque en el constructor son obligatorios

        $usuario = new $class([]); // Ahora ya solo llamamos a un template vacío

        // $usuario->ToUser($result); //Aquí usuario ya es un Objeto Usuario y no sólo un array asociativo.
        $usuario->toModel($result);
        return $usuario;
    }

    public function toModel($data)
    {// El foreach transfiere los valores del fillable al objeto.
          if (isset($data['id'])) {
              $this->id = $data['id'];
          } //Si hay id, lo paso al objeto
          foreach ($data as $key => $value) {
              if (in_array($key, $this->fillable)) {// Usamos $this->fillable porque es una propiedad y no sólo una variable
                  $this->$key = $value;
              }
          }
        // private function ToUser($data) // Esto es equivalente a toModel
          // { //Recibe datos en formato array asociativo y los hidrata dentro de la instancia del objeto
          //     //Ahora que es u objeto puede tener funciones propias del Objeto Usuario
          //     $this->id=$data['id'];
          //     $this->nombre=$data['nombre'];
          //     $this->email=$data['email'];
          //     $this->pasword=$data['password'];
          //     $this->imagen=$data['imagen'];
          // }
    }

    public function traerTodos() {

      // $sql = 'SELECT * FROM '.static::$tabla.' WHERE id = :id';
      // $stmt = connDB::getConn()->prepare($sql);
      // $stmt->bindvalue(':id', $id, PDO::PARAM_INT);
      // $stmt->execute();
      //
      //
      // $result = $stmt->fetch(PDO::FETCH_ASSOC);
      // $class = get_called_class();
      // $usuario = new $class([]); // Ahora ya solo llamamos a un template vacío
      // $usuario->toModel($result);
      // return $usuario;

      $sql = 'SELECT * FROM '.static::$tabla.'';
      $stmt = connDB::getConn()->prepare($sql);
      $stmt->execute();

      $arrayFinal = []; // de daro

      $result = $stmt->fetchAll();
      $class = get_called_class();
      // $usuario = new $class([]); // Ahora ya solo llamamos a un template vacío
      // $usuario->toModel($result);
      // return $usuario;
      foreach ($usuarios as $usuario) {
        $arrayFinal[] = new Usuario($usuario);
      }

      return $arrayFinal;

//******* DARO
		// $query = static::$connDB->prepare("Select * from usuarios");
		// $query->execute();
    //
    // $arrayFinal = [];
    //
		// $usuarios = $query->fetchAll();
    //
    // foreach ($usuarios as $usuario) {
    //   $arrayFinal[] = new Usuario($usuario);
    // }
    //
    // return $arrayFinal;
  }
  public function traerPorMail($email) {

    // $sql = 'SELECT * FROM '.static::$tabla.' WHERE id = :id';
    // $stmt = connDB::getConn()->prepare($sql);
    // $stmt->bindvalue(':id', $id, PDO::PARAM_INT);
    // $stmt->execute();
    //
    //
    // $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // $class = get_called_class();
    // $usuario = new $class([]); // Ahora ya solo llamamos a un template vacío
    // $usuario->toModel($result);
    // return $usuario;

    $sql = 'SELECT * FROM '.static::$tabla.' WHERE email = :email';
    $stmt = connDB::getConn()->prepare($sql);
    $stmt->bindvalue(':email', $email, PDO::PARAM_STR);
    $stmt->execute();


    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $class = get_called_class();
    $usuario = new $class([]); // Ahora ya solo llamamos a un template vacío

    if ($usuario != null) {
      return new Usuario($usuario);
    }
    else {
      return null;
    }

    // $usuario->toModel($result);
    // return $usuario;

    //DARO
		// $query = static::$connDB->prepare("Select * from usuarios where email = :email");
		// $query->bindValue(":email", $email);
    //
		// $query->execute();
    //
		// $usuario = $query->fetch();
    //
    // if ($usuario != null) {
    //   return new Usuario($usuario);
    // }
    // else {
    //   return null;
    // }

}

}
