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
      <legend>Cadastro de Tipos de Veículos</legend>
      
      <form action="/tipo/save" method="post">

        <fieldset>
            <input type="hidden" 
                        name="id" 
                        value="<?= $model->id ?>">
            
            <label for="descricao">Descrição:</label>
            <input name="descricao" 
                        id="descricao" 
                        type="text" 
                        value="<?= $model->descricao ?>" />

            <button type="submit">Enviar</button>

        </fieldset>

    </form>
</body>

</html>