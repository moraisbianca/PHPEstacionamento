<div class="container">
<table class="table">
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
    <th scope="row">1</th>
      <td><a href="/combustivel/delete?id=<?= $item->id?>">X</a></td>
      <td><?= $item->id ?></td>
      <td><a href="/combustivel/form?id=<?= $item->id ?>"><?= $item->descricao ?></a></td>
    </tr>
  </tbody>

  <?php endforeach ?>

</table>
</div>

