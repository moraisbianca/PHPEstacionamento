<?php

namespace APP\Controller;

use App\Model\FabricanteModel;

class FabricanteController extends Controller
{
    public static function index()
    {
        $model = new FabricanteModel();
        $model->getAllRows();

        parent::render('Fabricante/ListagemFabricante', $model); 
    }

    public static function form()
    {
        $model = new FabricanteModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById($_GET['id']);
        }

        parent::render('Fabricante/CadastroFabricante', $model);
    }
    
    public static function save()
    {
        $model = new FabricanteModel();
        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];

        $model->save();

        header("Location: /fabricante");
    }
    
    public static function delete()
    {
        $model = new FabricanteModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /fabricante");
    }
}