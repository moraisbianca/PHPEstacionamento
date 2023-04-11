<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Listagem de Tipo de Veículos</title>

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
            <a class="nav-link" href="/veiculo/form">Veículo</a>
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
    </ul>
</div>

<br>
<div class="container">
  <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
          <th scope="col">ID</th>
          <th scope="col">Descrição</th>
        </tr>
      </thead>

      <?php foreach($model->rows as $item): ?>

      <tbody>
        <tr>
        <th> <a href="/tipo/delete?id=<?= $item->id?>">X</a></th>
          <td><?= $item->id ?></td>
          <td><a href="/tipo/form?id=<?= $item->id ?>"><?= $item->descricao ?></a></td>
        </tr>
      </tbody>

      <?php endforeach ?>
  </table>
</div>
</body>