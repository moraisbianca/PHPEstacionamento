<?php

use App\View\home;

use App\Controller\{
    VeiculoController,
    FabricanteController,
    MarcaController,
    TipoController,
    CombustivelController
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($parse_uri) {

        // rotas de backup
    case "/exportar":
        $return_var = NULL;
        $output = NULL;
        $command = 'C:/"Program Files"/MySQL/"MySQL Server 8.0"/bin/mysqldump -uroot -petecjau -P3307 -hlocalhost db_estacionamento > C:/Dev/file.sql';

        exec($command, $output, $exit_code);

        var_dump($exit_code);

        echo "deu certo";
        break;

        case "/importar":

            $nome_arquivo = "C:/Dev/file.sql";

            $file = fopen($nome_arquivo, "r");
            $sql = fread($file, filesize($nome_arquivo));

            $dsn = "mysql:host=localhost:3307"; 
            $user = "root";
            $pass = "etecjau";
            
            $conexao = new PDO($dsn, $user, $pass);
            $conexao->exec($sql);

            break;


        //  rotas de veículo
    case "/veiculo":
        VeiculoController::index();
        break;

    case "/veiculo/form":
        VeiculoController::form();
        break;

    case "/veiculo/save":
        VeiculoController::save();
        break;

    case "/veiculo/delete":
        VeiculoController::delete();
        break;

        // rotas para fabricante
    case "/fabricante":
        FabricanteController::index();
        break;

    case "/fabricante/form":
        FabricanteController::form();
        break;

    case "/fabricante/save":
        FabricanteController::save();
        break;

    case "/fabricante/delete":
        FabricanteController::delete();
        break;

        // rotas para marca
    case "/marca":
        MarcaController::index();
        break;

    case "/marca/form":
        MarcaController::form();
        break;

    case "/marca/save":
        MarcaController::save();
        break;

    case "/marca/delete":
        MarcaController::delete();
        break;

        // rotas para tipo
    case "/tipo":
        TipoController::index();
        break;

    case "/tipo/form":
        TipoController::form();
        break;

    case "/tipo/save":
        TipoController::save();
        break;

    case "/tipo/delete":
        TipoController::delete();
        break;

        // rotas para combustivel
    case "/combustivel":
        CombustivelController::index();
        break;

    case "/combustivel/form":
        CombustivelController::form();
        break;

    case "/combustivel/save":
        CombustivelController::save();
        break;

    case "/combustivel/delete":
        CombustivelController::delete();
        break;


    default:
        VeiculoController::form();
        break;
}
