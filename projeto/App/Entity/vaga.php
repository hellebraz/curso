<?php

namespace App\Entity;

class vaga{

/**
 *Identificador único da vaga
 * @var integer
 */   
   private $id;

/** 
 *Tituto da vaga 
 *@var string
 */
   private $tituto;

/**
*Descriçao da vaga (pode conter html)
*@var string
*/
private $descriçao;

/**
 * Define se a vaga ativo
 * @var string(s/n)
 */
private $ativo;

/**
 *Data da publicaçao da vaga 
 *@var string 
 */
private $Data;

/**
 *Método nesponsável por cadastrar uma nova vaga no banco
 *@return boolean
 */

private function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('y-m-d');

    //INSERIR A VAGA NO BANCO
    

    //ATRIBUIR O ID DA VAGA NA INSTANCIA

    //RETORNAR COM SUCESO

    
}



}