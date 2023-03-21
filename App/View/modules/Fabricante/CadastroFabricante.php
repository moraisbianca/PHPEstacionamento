﻿<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro de Fabricantes</title>

      <style>
        label,
        input {
            display: block;
        }
    </style>

      <?php include "./View/includes/css_config.php" ?>
      <?php include "./View/includes/js_config.php" ?>
</head>

<body>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="">Fabricante</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/tipo/form">Tipo</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/marca/form">Marca</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/combustivel/form">Combustivel</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/veiculo/form">Veiculo</a>
    </li>
    </ul>
</div>

<br>

<div class="container">
      <legend>Cadastro de Fabricante</legend>
      
      <form action="/fabricante/save" method="post">

        <fieldset>
            <input type="hidden" 
                        name="id" 
                        value="<?= $model->id ?>">
            
            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira a fabricante</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Fabricante:" 
                        name="descricao"
                        id="descricao"
                        type="text" 
                        value="<?= $model->descricao ?>">                    
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                 <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

        </fieldset>

    </form>

    </form>
</div>
</body>

</html>