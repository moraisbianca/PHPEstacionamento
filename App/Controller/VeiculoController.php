<?php

namespace App\Controller;

use App\Model\VeiculoModel;

class VeiculoController extends Controller {

      public static function index()
      {
            $model = new VeiculoModel();
            $model->getAllRows();

            parent::render('Veiculo/ListagemVeiculo', $model);
      }

      public static function form()
      {
            $model = new VeiculoModel();

            $model->getAllMarca();
            $model->getAllTipo();
            $model->getAllCombustivel();
            $model->getAllFabricante();

            if(isset($_GET['id']))
            {
                  $model = $model->getById($_GET['id']);
            }   

            parent::render('Veiculo/CadastroVeiculo', $model);
      }
      
      public static function save()
      {
            $model = new VeiculoModel();
            $model->id = $_POST['id'];
            $model->placa = $_POST['placa'];
            $model->modelo = $_POST['modelo'];
            $model->ano = $_POST['ano'];
            $model->cor = $_POST['cor'];
            $model->chassi = $_POST['chassi'];
            $model->quilometragem = $_POST['quilometragem'];
            $model->revisao = $_POST['revisao'];
            $model->sinistro = $_POST['sinistro'];
            $model->roubo_furto = $_POST['roubo_furto'];
            $model->aluguel = $_POST['aluguel'];
            $model->venda = $_POST['venda'];
            $model->particular = $_POST['particular'];

            $model->save();

            header("Location: /veiculo");
      }
      
      public static function delete()
      {
            $model = new VeiculoModel();

            $model->delete((int) $_GET['id']);

            header("Location: /veiculo");
      }
}