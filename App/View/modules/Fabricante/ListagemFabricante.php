<table>
      <tr>
            <th></th>
            <th>Id</th>
            <th>Descrição</th>
      </tr>

      <?php foreach($model->rows as $item): ?>
      <tr>   
          <td>
              <a href="/fabricante/delete?id=<?= $item['id']?>">X</a>
          </td>

          <td><?= $item['id'] ?></td>

          <td>
              <a href="/fabricante/form?id=<?= $item['id'] ?>"><?= $item['descricao'] ?></a> 
          </td>  
      </tr>
    <?php endforeach ?>

</table>