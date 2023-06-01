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
        $sql = "INSERT INTO veiculo (placa, modelo, ano, cor, chassi, quilometragem, revisao, sinistro, roubo_furto, aluguel, venda, particular, id_fabricante, id_marca, id_combustivel, id_tipo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        
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
        $stmt->bindValue(13, $model-> id_fabricante);
        $stmt->bindValue(14, $model-> id_marca);
        $stmt->bindValue(15, $model-> id_combustivel);
        $stmt->bindValue(16, $model-> id_tipo);
        $stmt->execute();      
    }

    public function select()
    {
        $sql = "SELECT v.id, v.placa, v.modelo, v.ano, v.cor, v.chassi, v.quilometragem, v.revisao, v.sinistro, v.roubo_furto, v.aluguel, 
        v.venda, v.particular, f.descricao as fabricante, m.descricao as marca, c.descricao as combustivel, t.descricao as tipo
        FROM veiculo v
        LEFT JOIN fabricante f ON (f.id = v.id_fabricante)
        LEFT JOIN marca m ON (m.id = v.id_marca)
        LEFT JOIN combustivel c ON (c.id = v.id_combustivel)
        LEFT JOIN tipo t ON (t.id = v.id_tipo);";

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
        $sql = "UPDATE veiculo set placa=?, modelo=?, ano=?, cor=?, chassi=?, quilometragem=?, revisao=?, sinistro=?, roubo_furto=?, aluguel=?, venda=?, particular=?, id_fabricante=?, id_marca=?, id_combustivel=?, id_tipo=? WHERE id=? ";

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
        $stmt->bindValue(13, $model-> id_fabricante);
        $stmt->bindValue(14, $model-> id_marca);
        $stmt->bindValue(15, $model-> id_combustivel);
        $stmt->bindValue(16, $model-> id_tipo);
        $stmt->bindValue(17, $model->id);
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