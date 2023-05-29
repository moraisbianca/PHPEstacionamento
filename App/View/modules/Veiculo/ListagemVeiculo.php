<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Veículos</title>

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
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Chassi</th>
                    <th scope="col">Quilometragem</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Combustivel</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Fabricante</th>
                    <th scope="col">Revisão</th>
                    <th scope="col">Sinistro</th>
                    <th scope="col">Furto</th>
                    <th scope="col">Aluguel</th>
                    <th scope="col">Venda</th>
                    <th scope="col">Particular</th>

                </tr>
            </thead>

            <?php foreach ($model->rows as $item) : ?>

                <tbody>
                    <tr>
                        <th> <a href="/tipo/delete?id=<?= $item->id ?>">X</a></th>
                        <td><?= $item->id ?></td>
                        <td><a href="/tipo/form?id=<?= $item->id ?>"><?= $item->placa ?></a></td>
                        <td><a><?= $item->modelo ?></a></td>
                        <td><a><?= $item->ano ?></a></td>
                        <td><a><?= $item->cor ?></a></td> 
                        <td><a><?= $item->chassi ?></a></td>
                        <td><a><?= $item->quilometragem ?></a></td>
                        <td><a><?= $item->id_marca ?></a></td>
                        <td><a><?= $item->id_combustivel ?></a></td>
                        <td><a><?= $item->id_tipo ?></a></td>
                        <td><a><?= $item->id_fabricante ?></a></td>
                        <td><a><?= $item->revisao ?></a></td>
                        <td><a><?= $item->sinistro ?></a></td>
                        <td><a><?= $item->roubo_furto ?></a></td>
                        <td><a><?= $item->aluguel ?></a></td>
                        <td><a><?= $item->venda ?></a></td>
                        <td><a><?= $item->particular ?></a></td>

                    </tr>
                </tbody>

            <?php endforeach ?>
        </table>
    </div>

</body>

</html>