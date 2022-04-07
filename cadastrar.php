<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Entity\Vaga;

//VALIDAÇAO DO POST
if(isset($_POST['titulo'],$_POST['descriçao'],$_POST['ativo'])){

  $obVaga = new Vaga;
  $obVaga->titulo      = $_POST['titulo'];
  $obVaga->descriçao   = $_POST['descriçao'];
  $obVaga->ativo       = $_POST['ativo'];
  $obVaga->cadastrar();  


} 

include __DIR__ . "/includes/header.php";
include __DIR__ . "/includes/formulario.php";
include __DIR__ . "/includes/footer.php";
