<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro de Tipo de Veículos</title>

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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Veículo
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/veiculo/form">Cadastrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/veiculo">Visualizar</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Tipo</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/marca/form">Marca</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/fabricante/form">Fabricante</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/combustivel/form">Combustível</a>
        </li>

        <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/veiculo/form">Cadastrar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/veiculo">Visualizar</a></li>
          </ul>
        </li> !-->

    </ul>
</div>

<br>

<div class="container">
<legend>Cadastro de Tipo</legend>
      
      <form action="/tipo/save" method="post">

        <fieldset>
            <input type="hidden" 
                        name="id" 
                        value="<?= $model->id ?>">
            
            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira o tipo de veículo:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" maxlength="40"
                        name="descricao" 
                        id="descricao" 
                        type="text" 
                        value="<?= $model->descricao ?>">

            <br>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-primary" type="submit">Enviar</button>
            </div>                
            </div>            
        </fieldset>

    </form>

    </form>

</div>

</body>

</html>