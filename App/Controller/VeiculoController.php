<?php

namespace App\Controller;

use App\Model\VeiculoModel;

class VeiculoController extends Controller {

      public static function index()
      {
            
      }

      public static function form()
      {
            $model = new VeiculoModel();

            $model->getAllMarca();
            $model->getAllTipo();
            $model->getAllCombustivel();
            $model->getAllFabricante();
            // INCLUDE;
      }
      
      public static function save()
      {
      
      }
      
      public static function delete()
      {
      
      }
}