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
            //$model->revisao =  (isset($_POST['revisao'])) ? true : false;
            $model->sinistro = (isset($_POST['sinistro'])) ? true : false;
            //$model->roubo_furto = (isset($_POST['roubo_furto'])) ? true : false;
            //$model->aluguel = (isset($_POST['aluguel'])) ? true : false;
            //$model->venda = (isset($_POST['venda'])) ? true : false;
            //$model->particular = (isset($_POST['particular'])) ? true : false;
            
            $model->id_marca = $_POST['id_marca'];
            $model->id_fabricante = $_POST['id_fabricante'];
            $model->id_combustivel = $_POST['id_combustivel'];
            $model->id_tipo = $_POST['id_tipo'];

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