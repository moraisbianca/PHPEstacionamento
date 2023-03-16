<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro de Tipo de Veículo</title>

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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">veiculo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">conbustivel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">marca</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<div>
      <legend>Cadastro de Tipos de Veículos</legend>
      
      <form action="/tipo/save" method="post">

        <fieldset>
            <input type="hidden" 
                        name="id" 
                        value="<?= $model->id ?>">
            
            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira o Tipo</label>
                 <input type="text" class="form-control{min-width:800px;}" id="formGroupExampleInput" placeholder="Tipo:" value="<?= $model->descricao ?>">                    
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                 <button class="btn btn-primary" type="button">Button</button>
            </div>

        </fieldset>

    </form>

    </form>
</div>
</body>

</html>