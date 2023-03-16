<?php

namespace App\Model;

use App\DAO\MarcaDAO;
use App\DAO\FabricanteDAO;
use App\DAO\TipoDAO;
use App\DAO\CombustivelDAO;
use App\DAO\VeiculoDAO;

class VeiculoModel extends Model
{
    public $id, $descricao; 

    public $lista_marca, $lista_fabricante, $lista_combustivel, $lista_tipo;

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

        $this->lista_marca = $dao->select();
    }

    public function getAllFabricante(){
        $dao = new FabricanteDAO();

        $this->lista_fabricante = $dao->select();
    }

    public function getAllCombustivel(){
        $dao = new CombustivelDAO();

        $this->lista_combustivel = $dao->select();
    }

    public function getAllTipo(){
        $dao = new TipoDAO();

        $this->lista_tipo = $dao->select();
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