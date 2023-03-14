<?php

namespace App\DAO;

use App\Model\TipoModel;
use \PDO;

class TipoDAO extends DAO
{

    public function __construct()
    {
        parent::__construct();
    }

    function insert(TipoModel $model) 
    {  
        $sql = "INSERT INTO tipo (descricao) VALUES (?);";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT * FROM tipo ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
    
    public function selectById(int $id)
    {
        $sql = "SELECT * FROM tipo WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }


    public function update(TipoModel $model)
    {
        $sql = "UPDATE tipo set descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }
    
    public function delete(int $id)
    {
        $sql = "DELETE FROM tipo WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}