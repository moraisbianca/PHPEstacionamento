<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro de Combustíveis</title>

      <style>
        label,
        input {
            display: block;
        }
    </style>

      <?php include "./View/includes/css_config.php" ?>
      <?php include "./View/includes/js_config.php" ?>
      <?php include "./View/modules/header.php"?>

      
</head>

<body>

<br>

<div class="container">
<legend>Cadastro de Combustíveis</legend>
      
      <form action="/combustivel/save" method="post">

        <fieldset>
            <input type="hidden" 
                        name="id" 
                        value="<?= $model->id ?>">
            
            <div center class="mb-3">
                 <label for="formGroupExampleInput" class="form-label">Insira o combustível:</label>
                 <input type="text" class="form-control" id="formGroupExampleInput" maxlength="30"
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