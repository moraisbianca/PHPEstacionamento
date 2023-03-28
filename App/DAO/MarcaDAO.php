<?php

namespace App\DAO;

use App\Model\MarcaModel;
use \PDO;

class MarcaDAO extends DAO
{

    public function __construct()
    {
        parent::__construct();
    }

    function insert(MarcaModel $model) 
    {  
        $sql = "INSERT INTO marca (descricao) VALUES (?);";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT * FROM marca ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    
    public function selectById(int $id)
    {
        $sql = "SELECT * FROM marca WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }


    public function update(MarcaModel $model)
    {
        $sql = "UPDATE marca set descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }
    
    public function delete(int $id)
    {
        $sql = "DELETE FROM marca WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}