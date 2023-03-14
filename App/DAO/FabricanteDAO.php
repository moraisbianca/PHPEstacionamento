<?php

namespace App\DAO;

use App\Model\FabricanteModel;
use \PDO;

class FabricanteDAO extends DAO
{

    public function __construct()
    {
        parent::__construct();
    }

    function insert(FabricanteModel $model) 
    {  
        $sql = "INSERT INTO fabricante (descricao) VALUES (?);";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT * FROM fabricante ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
    
    public function selectById(int $id)
    {
        $sql = "SELECT * FROM fabricante WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }


    public function update(FabricanteModel $model)
    {
        $sql = "UPDATE fabricante set descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }
    
    public function delete(int $id)
    {
        $sql = "DELETE FROM fabricante WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}