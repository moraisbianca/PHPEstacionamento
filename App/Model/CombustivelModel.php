<?php

namespace App\Model;

use App\DAO\CombustivelDAO;

class CombustivelModel extends Model
{
    public $id, $descricao;

    public function save()
    {
        $dao = new CombustivelDAO();

        if($this->id == null) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new CombustivelDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new CombustivelDAO();

        return $dao->selectById($id);
    }

    public function delete(int $id)
    {
        $dao = new CombustivelDAO();

        $dao->delete($id);
    }
}


?>