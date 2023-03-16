<?php

namespace APP\Controller;

use App\Model\TipoModel;

class TipoController extends Controller
{
    public static function index()
    {
        $model = new TipoModel();
        $model->getAllRows();

        parent::render('Tipo/ListagemTipo', $model);
    }

    public static function form()
    {
        $model = new TipoModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById($_GET['id']);
        }

        parent::render('Tipo/CadastroTipo', $model);
    }
    
    public static function save()
    {
        $model = new TipoModel();
        $model->id = $_POST['id'];
        $model->descricao = $_POST['descricao'];

        $model->save();

        header("Location: /tipo");
    }
    
    public static function delete()
    {
        $model = new TipoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /tipo");
    }
}