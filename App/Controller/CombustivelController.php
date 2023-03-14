<?php

namespace App\Controller;

use App\Model\CombustivelModel;

class CombustivelController extends Controller
{
    public static function index()
    {
        $model = new CombustivelModel();
        $model->getAllRows();

        parent::render('Combustivel/ListagemCombustivel', $model);
    }

    public static function form()
    {
        $model = new CombustivelModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById($_GET['id']);
        }

        parent::render('Combustivel/CadastroCombustivel', $model);
    }
    
    public static function save()
    {
        $model = new CombustivelModel();
        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];

        $model->save();

        header("Location: /combustivel");
    }
    
    public static function delete()
    {
        $model = new CombustivelModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /combustivel");
    }
}