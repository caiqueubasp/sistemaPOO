<?php

// // Requerindo modelo para criar objetos
// require_once "Pessoas.php";


// // Criando objetos usando variaveis
// $pessoa = new Pessoas();



// $pessoa->setNome("Caique");
// $pessoa->setIdade(21);

// var_dump($pessoa);

$controller = key($_GET);
$controller.= "Controller";

require_once "controller/$controller.php";

$obj = new $controller();
$obj->view($_SERVER['REQUEST_METHOD']);

// var_dump($controller);

?>