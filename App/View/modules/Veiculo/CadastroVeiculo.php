<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro de Veículos</title>

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
        <a class="nav-link active" aria-current="page" href="">Veículo</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/tipo/form">Tipo</a>
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
    </ul>
</div>

<br>

<div class="container">
      <legend>Cadastro de Veículo</legend>
      
      <form action="/veiculo/save" method="post">

        <fieldset>
            <input type="hidden" 
                        name="id" 
                        value="<?= $model->id ?>">
            
            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira a placa:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" 
                        name="placa" 
                        id="placa" 
                        type="text" 
                        value="<?= $model->placa ?>">                    
            </div>

            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira o modelo:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" 
                        name="modelo" 
                        id="modelo" 
                        type="modelo" 
                        value="<?= $model->modelo ?>">                    
            </div>

            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira o ano:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput"
                        name="ano" 
                        id="ano" 
                        type="ano" 
                        value="<?= $model->ano ?>">                    
            </div>

            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira a cor:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" 
                        name="cor" 
                        id="cor" 
                        type="cor" 
                        value="<?= $model->cor ?>">                    
            </div>

            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira o chassi:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput"
                        name="chassi" 
                        id="chassi" 
                        type="chassi" 
                        value="<?= $model->chassi ?>">                    
            </div>
            
            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira a quilometragem:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput"
                        name="quilometragem" 
                        id="quilometragem" 
                        type="quilometragem" 
                        value="<?= $model->quilometragem ?>">                    
            </div>
        </fieldset>

    </form>

    </form>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?= $model->revisao ?>" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault" id="revisao">
            Revisão
        </label>

        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?= $model->sinistro ?>" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault"   id="sinistro">
            Sinistro
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?= $model->roubo_furto ?>" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault"  id="roubo_furto">
            Roubo-Furto
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?= $model->aluguel ?>" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault" id="aluguel">
             Aluguel
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?= $model->venda ?>" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault" id="venda">
            Venda
        </label>
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?= $model->particular ?>" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault" id="particular">
            Particular
        </label>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
</div>

</body>

</html>