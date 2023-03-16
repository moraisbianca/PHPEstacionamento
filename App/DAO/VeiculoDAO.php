<?php

namespace App\DAO;

use App\Model\VeiculoModel;
use \PDO;

class VeiculoDAO extends DAO
{

    public function __construct()
    {
        parent::__construct();
    }

    function insert(VeiculoModel $model) 
    {  
        $sql = "INSERT INTO Veiculo (descricao) VALUES (?);";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT * FROM Veiculo ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
    
    public function selectById(int $id)
    {
        $sql = "SELECT * FROM Veiculo WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }


    public function update(VeiculoModel $model)
    {
        $sql = "UPDATE Veiculo set descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }
    
    public function delete(int $id)
    {
        $sql = "DELETE FROM Veiculo WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}