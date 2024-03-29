<?php

namespace App\DAO;

use App\Model\CombustivelModel;
use PDO;

class CombustivelDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    function insert(CombustivelModel $model) 
    {  
        $sql = "INSERT INTO combustivel (descricao) VALUES (?);";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT * FROM combustivel ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    
    public function selectById(int $id)
    {
        $sql = "SELECT * FROM combustivel WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }


    public function update (CombustivelModel $model)
    {
        $sql = "UPDATE combustivel set descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }
    
    public function delete(int $id)
    {
        $sql = "DELETE FROM combustivel WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}


?>