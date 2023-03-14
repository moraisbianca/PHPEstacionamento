<?php

namespace App\Model;

use App\DAO\MarcaDAO;

class MarcaModel extends Model
{
    public $id, $descricao;

    public function save()
    {
        $dao = new MarcaDAO();

        if($this->id == null) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new MarcaDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new MarcaDAO();

        return $dao->selectById($id);
    }

    public function delete(int $id)
    {
        $dao = new MarcaDAO();

        $dao->delete($id);
    }
}


?>