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
      <legend>Cadastro de Veículos</legend>
      
      <form action="/veiculo/save" method="post">

        <fieldset>
            <input type="hidden" 
                        name="id" 
                        value="<?= $model->id ?>">
            
            <label for="">Placa:</label>
            <input name="placa" 
                        id="placa" 
                        type="text" 
                        value="<?= $model->placa ?>" />
                        
             <label for="">Modelo:</label>
             <input name="modelo" 
                        id="modelo" 
                        type="text" 
                        value="<?= $model->modelo ?>" />
                        
             <label for="">Ano:</label>
             <input name="ano" 
                        id="ano" 
                        type="number" 
                        value="<?= $model->ano ?>" /> 
                        
                                 
             <label for="">Cor:</label>
             <input name="cor" 
                        id="cor" 
                        type="text" 
                        value="<?= $model->cor ?>" />
                        
             <label for="">Número de Chassi:</label>
             <input name="chassi" 
                        id="chassi" 
                        type="text" 
                        value="<?= $model->chassi ?>" />
                        
             <label for="">Quilometragem:</label>
             <input name="quilometragem" 
                        id="quilometragem" 
                        type="number" 
                        value="<?= $model->quilometragem ?>" />
            
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