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
                <input type="hidden" name="id" value="<?= $model->id ?>">

                <div center class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Insira a placa:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" maxlength="7" name="placa" id="placa" type="text" value="<?= $model->placa ?>">
                </div>

                <div center class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Insira o modelo:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="modelo" id="modelo" type="modelo" value="<?= $model->modelo ?>">
                </div>

                <div center class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Insira o ano:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" maxlength="4" name="ano" id="ano" type="ano" value="<?= $model->ano ?>">
                </div>

                <div center class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Insira a cor:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="cor" id="cor" type="cor" value="<?= $model->cor ?>">
                </div>

                <div center class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Insira o N° de chassi:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" maxlength="17" name="chassi" id="chassi" type="chassi" value="<?= $model->chassi ?>">
                </div>

                <div center class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Insira a quilometragem:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" maxlength="10" name="quilometragem" id="quilometragem" type="quilometragem" value="<?= $model->quilometragem ?>">
                </div>

                <div center class="mb-3">
                    <label for="select-marca">Selecione a marca:</label>
                    <select name="id_marca" id="id_marca" class="form-select">
                        <?php foreach ($model->id_marca as $marca) : ?>
                            <option value="<?= $marca->id ?>"><?= $marca->descricao ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div center class="mb-3">
                    <label for="select-combustivel">Selecione o combustível:</label>
                    <select name="id_combustivel" id="id_combustivel" class="form-select">
                        <?php foreach ($model->id_combustivel as $combustivel) : ?>
                            <option value="<?= $combustivel->id ?>"><?= $combustivel->descricao ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div center class="mb-3">
                    <label for="select-tipo">Selecione o tipo:</label>
                    <select name="id_tipo" id="id_tipo" class="form-select">
                        <?php foreach ($model->id_tipo as $tipo) : ?>
                            <option value="<?= $tipo->id ?>"><?= $tipo->descricao ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div center class="mb-3">
                    <label for="select-fabricante">Selecione o fabricante:</label>
                    <select name="id_fabricante" id="id_fabricante" class="form-select">
                        <?php foreach ($model->id_fabricante as $fabricante) : ?>
                            <option value="<?= $fabricante->id ?>"><?= $fabricante->descricao ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </fieldset>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" <?= ($model->revisao) ? 'checked' : '' ?> value="true" id="check-revisao">
                
                
                <label class="form-check-label" for="check-revisao" id="revisao">
                    Revisão
                </label>

            </div>
            <div class="form-check">
                <input name="sinistro" class="form-check-input" type="checkbox" <?= ($model->sinistro) ? 'checked' : '' ?> value="true" id="check-sinistro">
                <label class="form-check-label" for="check-sinistro" id="sinistro">
                    Sinistro
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" <?= ($model->roubo_furto) ? 'checked' : '' ?> value="true" id="check-roubo_furto">
                <label class="form-check-label" for="check-roubo_furto" id="roubo_furto">
                    Roubo-Furto
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" <?= ($model->aluguel) ? 'checked' : '' ?> value="true" id="check-aluguel">
                <label class="form-check-label" for="check-aluguel" id="aluguel">
                    Aluguel
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" <?= ($model->venda) ? 'checked' : '' ?> value="true" id="check-venda">
                <label class="form-check-label" for="check-venda" id="venda">
                    Venda
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" <?= ($model->particular) ? 'checked' : '' ?> value="true" id="check-particular">
                <label class="form-check-label" for="check-particular" id="particular">
                    Particular
                </label>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>

</body>

</html>