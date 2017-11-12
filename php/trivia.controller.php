<?php

require 'clases/Trivia.php';

  // $trivia = new Trivia($_POST['pregunta'], $_POST['ayuda'], $_POST['categoria_id']);
  $trivia = new Trivia($_POST);

  var_dump($trivia);
  $trivia->save();
