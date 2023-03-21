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
        <a class="nav-link active" aria-current="page" href="">Veiculo</a>
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
        <a class="nav-link" href="/combustivel/form">Combustivel</a>
    </li>
    </ul>
</div>

<br>

<div class="container">
      <legend>Cadastro de Veiculo</legend>
      
      <form action="/veiculo/save" method="post">

        <fieldset>
            <input type="hidden" 
                        name="id" 
                        value="<?= $model->id ?>">
            
            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira a Placa</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" placeholder="placa:" 
                        name="placa" 
                        id="placa" 
                        type="text" 
                        value="<?= $model->placa ?>">                    
            </div>

            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira a modelo</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" placeholder="modelo:" 
                        name="modelo" 
                        id="modelo" 
                        type="modelo" 
                        value="<?= $model->modelo ?>">                    
            </div>

            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira o ano</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ano:" 
                        name="ano" 
                        id="ano" 
                        type="ano" 
                        value="<?= $model->ano ?>">                    
            </div>

            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira a cor</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" placeholder="cor:" 
                        name="cor" 
                        id="cor" 
                        type="cor" 
                        value="<?= $model->cor ?>">                    
            </div>

            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira o chassi</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" placeholder="chassi:" 
                        name="chassi" 
                        id="chassi" 
                        type="chassi" 
                        value="<?= $model->chassi ?>">                    
            </div>
            
            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira a quilometragem</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" placeholder="quilometragem:" 
                        name="quilometragem" 
                        id="quilometragem" 
                        type="quilometragem" 
                        value="<?= $model->quilometragem ?>">                    
            </div>
            
            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira a quilometragem</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" placeholder="quilometragem:" 
                        name="quilometragem" 
                        id="quilometragem" 
                        type="quilometragem" 
                        value="<?= $model->quilometragem ?>">                    
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                 <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

        </fieldset>

    </form>

    </form>
</div>















      <legend>Cadastro de Veículos</legend>
      
      
                        
                                 
            
                        
            
             <input name="checkbox[]" 
                        id="revisao" 
                        type="checkbox" 
                        value="<?= $model->revisao ?>" /> Revisão

             <input name="checkbox[]" 
                        id="sinistro" 
                        type="checkbox" 
                        value="<?= $model->sinistro ?>" /> Sinistro

             <input name="checkbox[]" 
                        id="roubo_furto" 
                        type="checkbox" 
                        value="<?= $model->roubo_furto ?>" /> Roubo-Furto
            
            <input name="checkbox[]" 
                        id="aluguel" 
                        type="checkbox" 
                        value="<?= $model->aluguel ?>" /> Aluguel

            <input name="checkbox[]" 
                        id="venda" 
                        type="checkbox" 
                        value="<?= $model->venda ?>" /> Venda

           <input name="checkbox[]" 
                        id="particular" 
                        type="checkbox" 
                        value="<?= $model->particular ?>" /> Particular
            
            
                                 
            <button type="submit">Enviar</button>

        </fieldset>

    </form>
</body>

</html>