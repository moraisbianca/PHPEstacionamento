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
            $model->revisao =  (isset($_POST['revisao'])) ? 1 : 0;
            $model->sinistro = (isset($_POST['sinistro'])) ? 1 : 0;
            $model->roubo_furto = (isset($_POST['roubo_furto'])) ? 1 : 0;
            $model->aluguel = (isset($_POST['aluguel'])) ? 1 : 0;
            $model->venda = (isset($_POST['venda'])) ? 1 : 0;
            $model->particular = (isset($_POST['particular'])) ? 1 : 0;
            $model->lista_marca = $_POST['lista_marca'];
            $model->lista_fabricante = $_POST['lista_fabricante'];
            $model->lista_combustivel = $_POST['lista_combustivel'];
            $model->lista_tipo = $_POST['lista_tipo'];

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