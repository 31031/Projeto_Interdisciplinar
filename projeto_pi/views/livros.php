<a class="btn btn-dark" href="?pagina=inserir_livro" role="button">Inserir Livro</a>
<br><br>

<table class="table table-hover table-striped" id="livros">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome do Livro</th>
      <th scope="col">Gênero</th>
      <th scope="col">Editora</th>
      <th scope="col">Autor</th>
      <th scope="col">Quantidade de Exemplares</th>
      <th scope="col">Editar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($linha = mysqli_fetch_array($consulta_livros)){
      print '
    <tr>
      <th scope="row">'.$linha['nome_livro'].'</th>';
      print '<td>'.$linha['genero_livro'].'</td>'; 
      print '<td>'.$linha['editora_livro'].'</td>';
      print '<td>'.$linha['autor_livro'].'</td>';
      print '<td>'.$linha['quant_exemp'].'</td>';
      ?>
      <td><a href="?pagina=inserir_livro&editar=<?php echo $linha['id_livro']; ?>"><i class="fas fa-user-edit"></i></a></td>
      <td><a href="deleta_livro.php?id_livro=<?php echo $linha['id_livro']; ?>"><i class="fas fa-trash-alt"></i></a></td>
      </tr>
    
    <?php
      }
    ?>

  </tbody>
</table>
