<?php

namespace App\Model;

use App\DAO\MarcaDAO;
use App\DAO\FabricanteDAO;
use App\DAO\TipoDAO;
use App\DAO\CombustivelDAO;
use App\DAO\VeiculoDAO;

class VeiculoModel extends Model
{
    public $id, $placa, $modelo, $ano, $cor, $chassi, 
        $quilometragem, $revisao, $sinistro, 
        $roubo_furto, $aluguel, $venda, $particular; 

    public $id_marca, $id_fabricante, $id_combustivel, $id_tipo;

    public function save()
    {
        $dao = new VeiculoDAO();

        if($this->id == null) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new VeiculoDAO();

        $this->rows = $dao->select();
    }


    public function getAllMarca(){
        $dao = new MarcaDAO();

        $this->id_marca = $dao->select();
    }

    public function getAllFabricante(){
        $dao = new FabricanteDAO();

        $this->id_fabricante = $dao->select();
    }

    public function getAllCombustivel(){
        $dao = new CombustivelDAO();

        $this->id_combustivel = $dao->select();
    }

    public function getAllTipo(){
        $dao = new TipoDAO();

        $this->id_tipo = $dao->select();
    }


    public function getById(int $id)
    {
        $dao = new VeiculoDAO();

        return $dao->selectById($id);
    }

    public function delete(int $id)
    {
        $dao = new VeiculoDAO();

        $dao->delete($id);
    }
}


?>