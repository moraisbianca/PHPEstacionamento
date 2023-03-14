<?php

namespace App\Model;

use App\DAO\FabricanteDAO;

class FabricanteModel extends Model
{
    public $id, $descricao;

    public function save()
    {
        $dao = new FabricanteDAO();

        if($this->id == null) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new FabricanteDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new FabricanteDAO();

        return $dao->selectById($id);
    }

    public function delete(int $id)
    {
        $dao = new FabricanteDAO();

        $dao->delete($id);
    }
}


?>