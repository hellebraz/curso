<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Entity\Vaga;

//VALIDAÇAO DO POST
if(isset($_POST['titulo'],$_POST['descriçao'],$_POST['ativo'])){

  $obprojeto = new Vaga;
  $obprojeto->titulo      = $_POST['titulo'];
  $obprojeto->descriçao   = $_POST['descriçao'];
  $obprojeto->ativo       = $_POST['ativo'];
  $obprojeto->cadastrar();  


} 

include __DIR__ . "/includes/header.php";
include __DIR__ . "/includes/formulario.php";
include __DIR__ . "/includes/footer.php";
