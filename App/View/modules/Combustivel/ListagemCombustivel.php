<table>
      <tr>
            <th></th>
            <th>Id</th>
            <th>Descrição</th>
      </tr>

      <?php foreach($model->rows as $item): ?>
      <tr>   
          <td>
              <a href="/combustivel/delete?id=<?= $item['id']?>">X</a>
          </td>

          <td><?= $item['id'] ?></td>

          <td>
              <a href="/combustivel/form?id=<?= $item['id'] ?>"><?= $item['descricao'] ?></a> 
          </td>  
      </tr>
    <?php endforeach ?>

</table>