<?php

require_once 'connDB.php';

/**
 * Plantilla que relaciona propiedades del objeto a tabla
 */
class Model // extends AnotherClass
{

    public function __construct($data)
    {
        $this->toModel($data); //Usamos la misma estructura en ToModel, vamos a solamente instanciarlo
    }

    public function save()
    {

        $sql = ($this->id)?$this->update():$this->insert();
        $stmt = connDB::getConn()->prepare($sql);

        foreach ($this->fillable as $column) { //itera sobre los campos que pueden ser editados
          $stmt->bindvalue(":$column", $this->$column); //Recupera el nombre de columna en la tabla y la transfiere a las propiedades del objeto
        }

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
    {

        $sql = 'SELECT * FROM '.static::$tabla.' WHERE id = :id';
        $stmt = connDB::getConn()->prepare($sql);
        $stmt->bindvalue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        //El resultado que devuelve la conexción puede representar se otras maneras, pero no es un objeto del tipo Usuario, sólo genérico.
        //Pero necesitamos que los datos de las columnas pasen a formar parte del objeto Usuario
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $class = get_called_class(); //get_called_class() devuelve el nombre de la clase que esta llamando el método

        $usuario = new $class([]);
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
    }


}
