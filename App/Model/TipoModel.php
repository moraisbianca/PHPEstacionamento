<?php

namespace App\Model;

use App\DAO\TipoDAO;

class TipoModel extends Model
{
    public $id, $descricao;

    public function save()
    {
        $dao = new TipoDAO();

        if($this->id == null) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new TipoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new TipoDAO();

        return $dao->selectById($id);
    }

    public function delete(int $id)
    {
        $dao = new TipoDAO();

        $dao->delete($id);
    }
}