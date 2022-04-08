<?php

namespace App\Db;

use \PDO;

class Database{

    /**
     * Host de conexao com o banco de dados
     * @var string
     */
const HOST = 'db';

    /**
     * nome do banco de dados
     * @var string
     */
const NAME = 'projetopessoa';


    /**
     * usuario do banco
     * @var string
     */
const USER = 'root';

    /**
     * senha de acesso ao banco de dados
     * @var string
     */
const PASS = 'toor';

    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
private $table;

    /**
     * Instancia de conexao com banco de dados
     * @var PDO
     */
private $connection;

    /**
     * Define a tabela e instancia e conexao
     * @param string $table
     */
private function _construct($table = null)
{   $this->table = $table;
    $this->setConnection();

     try{
         $this->connection = new PDO('mysql:host=' .self::HOST . ';dbname=' . setf::NAME,self::USER,setf::PASS);
         $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     }catch(PDOException $erro) {
             die('ERRO:' . $erro->getMessage());

     }
}
public function execute($query,$params = [])
{
    try{
        $statement =$this->connection->prepare($query);
        $statement ->execute($params);
    }catch(PDOException $erro) {
     die('Erro' . $erro->getMessage());

     }
}
public function insert($values)
{
    $fields=array_keys($values);
    $binds=array_pad([],count($fields),',');

    $query='INSERT INTO' . $this->tabela . '(' . implode(',',$fields).') VALUES ('. implode(',',$bints);

    return $this->connection->lastInsertId();
}
public function select($where=NULL,$order=NULL,$limit=NULL,$fields='*'){
    $where= strlen($where) ? 'WHERE ' . $where : '';
    $order= strlen($order) ? 'ORDER BY ' . $order : '';
    $limit= strlen($limit) ? 'LIMIT ' . $limit : '';

    $query= 'SELECT' . $fields . 'FROM' . $this->tabela . ' ' . $where . ' ' . $order . ' ' . $limit;

    $this->execute($query);
}
public function update($where, $values)
{
    $fields = array_keys($values);

    $query = 'UPDATE' . $this->tabela . 'SET' . implode('=?', $fields) . '=? WHERE' . $where;
}
public function delete($where)
{
     
$query = 'DELETE FROM' . $this->tabela . 'WHERE' . $where;

$this->execute($query);

return true;

}

}