<?php

function getUsers ($pathDB)
{
	$usuarios = [];
	if (file_exists($pathDB)) {
		$json = file_get_contents($pathDB);
		$json = explode(PHP_EOL, $json); //concatena los enter que leiste dentro de json de nuevo
		foreach ($json as $key => $value) {
			//busca todas las claves de la base y haz que los valores sean las claves??
		$json[$key] = json_decode($value, true);// no olvidar el true
	}
	return $json;
}

}


function getUserByEmail ($email, $pathDB)
{
	$usuarios = getUsers($pathDB);
	$usuario = false;
	for($i=0;$i<count($usuarios); $i++){
		if($usuarios[$i]['email'] == $email){
			$usuario = $usuarios[$i];
			break;
		}
	}
	// var_dump($usuario);
	return $usuario;
}
