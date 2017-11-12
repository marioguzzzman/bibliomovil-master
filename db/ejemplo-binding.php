<?php
    session_start();


//BINDING

//  ***** DEFINIR mi query - obtener statement

  // $stmt= $connDB->prepare('SELECT nombre FROM personal_viaja WHERE Estado_civil like ?'); // signo de interrogacion se transforma en lo que queremos
  $stmt= $connDB->prepare('SELECT * FROM personal_viaja WHERE DNI like ?'); // signo de interrogacion se transforma en lo que queremos

//  ***** EJECUTAR mi query (con parametros)
  $stmt->execute(['94002978']); // vamos a tener dentro del array la cantidad de parametros y el orden

//  ***** DEVOLVER  el resultado
  $personal= $stmt->fetchAll(PDO::FETCH_ASSOC);

  // var_dump($estado_civil);

//  ***** IMPRIMIR EN PAG
  foreach ($personal as $personal) {
      echo '<h1>'.$personal['nombre'].'</h1>';
      echo '<p>'.$personal['DNI'].'</p>';
  };

  //---------------BINDING POR VALOR

  $stmt= $connDB->prepare('SELECT * FROM personal_viaja WHERE EXTRACT(YEAR FROM nacimiento) > ?');

//***** PASAR los parametros
  $stmt->bindValue(1,1985,PDO::PARAM_INT); //orden de aparición del parámetro en la query, valor, "validación"

//  ***** EJECUTAR mi query
  $stmt->execute();
//  ***** DEVOLVER  el resultado
  $personal= $stmt->fetchAll(PDO::FETCH_ASSOC);

  var_dump($personal);

  //---------------BINDING CON PLACE HOLDER  // ESTA ES PREFERIBLE

echo "<h1>BINDING PLACE HOLDER</h1>";
  $stmt= $connDB->prepare('SELECT nombre FROM personal_viaja WHERE EXTRACT(YEAR FROM nacimiento) > :nacimiento'); //despues d elos: que coincida con el nombre de la columba

//  ***** EJECUTAR mi query
  $stmt->execute([':nacimiento'=>1995]);
//  ***** DEVOLVER  el resultado
  $personal= $stmt->fetchAll(PDO::FETCH_ASSOC);

  var_dump($personal);

  //---------------BINDING POR REFERENCIA
  echo "<h1>BINDING referencia</h1>";

$nacimiento='SELECT nombre FROM personal_viaja WHERE EXTRACT(YEAR FROM nacimiento=:nacimiento';
//preapro la query
$stmt= $connDB ->prepare($nacimiento);
//paso parametros
$stmt->bindParam(':nacimiento',$añio, PDO::PARAM_INT); //como segundo parametro espera una variable
$anio=1985;
$personal=[];

foreach ($personal as $añio) {
  $stmt->execute();
  $personal= $stmt->fetchAll(PDO::FETCH_ASSOC);
  var_dump($personal);

}
