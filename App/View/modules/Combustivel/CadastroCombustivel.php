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
</head>

<body>
<<<<<<< HEAD
<div class="container">
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="">Combustivel</a>
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
        <a class="nav-link" href="/veiculo/form">Veiculo</a>
    </li>
    </ul>
</div>

<br>

<div class="container">
=======
>>>>>>> 85cf1ce982363a55d41b0f6a4a97a56091fadc87
      <legend>Cadastro de Combustíveis</legend>
      
      <form action="/combustivel/save" method="post">

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