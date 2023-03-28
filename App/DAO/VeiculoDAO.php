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
        $sql = "INSERT INTO veiculo (placa, modelo, ano, cor, chassi, quilometragem, revisao, sinistro, roubo_furto, aluguel, venda, particular) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model-> placa);
        $stmt->bindValue(2, $model-> modelo);
        $stmt->bindValue(3, $model-> ano);
        $stmt->bindValue(4, $model-> cor);
        $stmt->bindValue(5, $model-> chassi);
        $stmt->bindValue(6, $model-> quilometragem);
        $stmt->bindValue(7, $model-> revisao);
        $stmt->bindValue(8, $model-> sinistro);
        $stmt->bindValue(9, $model-> roubo_furto);
        $stmt->bindValue(10, $model-> aluguel);
        $stmt->bindValue(11, $model-> venda);
        $stmt->bindValue(12, $model-> particular);
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT * FROM veiculo ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    
    public function selectById(int $id)
    {
        $sql = "SELECT * FROM veiculo WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }


    public function update(VeiculoModel $model)
    {
        $sql = "UPDATE veiculo set placa=?, modelo=?, ano=?, cor=?, chassi=?, quilometragem=?, revisao=?, sinistro=?, roubo_furto=?, aluguel=?, venda=?, particular=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model-> placa);
        $stmt->bindValue(2, $model-> modelo);
        $stmt->bindValue(3, $model-> ano);
        $stmt->bindValue(4, $model-> cor);
        $stmt->bindValue(5, $model-> chassi);
        $stmt->bindValue(6, $model-> quilometragem);
        $stmt->bindValue(7, $model-> revisao);
        $stmt->bindValue(8, $model-> sinistro);
        $stmt->bindValue(9, $model-> roubo_furto);
        $stmt->bindValue(10, $model-> aluguel);
        $stmt->bindValue(11, $model-> venda);
        $stmt->bindValue(12, $model-> particular);
        $stmt->bindValue(13, $model->id);
        $stmt->execute();
    }
    
    public function delete(int $id)
    {
        $sql = "DELETE FROM veiculo WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}