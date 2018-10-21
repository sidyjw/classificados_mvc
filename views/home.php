<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Anúncio</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($info as $anuncio): ?>
          <tr>
            <td>
              <?php if(!empty($anuncio['url'])): ?>
              <img src="assets/images/anuncios/<?php echo $anuncio['url']; ?>" height="50" border="0" />
              <?php else: ?>
              <img src="assets/images/default.jpg" height="50" border="0" />
              <?php endif; ?>
            </td> 
            <td>
              <a href="produto.php?id=<?php echo $anuncio['id']; ?>"><?php echo $anuncio['titulo']; ?></a><br/>
              <?php echo $anuncio['categoria']; ?>
            </td>
            <td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
          </tr>
          <?php endforeach; ?>
  </tbody>
</table>