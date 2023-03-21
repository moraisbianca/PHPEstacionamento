<?php

namespace App\Controller;

use App\Model\MarcaModel;

class MarcaController extends Controller
{
    public static function index()
    {
        $model = new MarcaModel();
        $model->getAllRows();

        parent::render('Marca/ListagemMarca', $model); 
    }

    public static function form()
    {
        $model = new MarcaModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById($_GET['id']);
        }

        parent::render('Marca/CadastroMarca', $model);
    }
    
    public static function save()
    {
        $model = new MarcaModel();
        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];

        $model->save();

        header("Location: /marca");
    }
    
    public static function delete()
    {
        $model = new MarcaModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /marca");
    }
}