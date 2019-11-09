<a class="btn btn-dark" href="?pagina=inserir_emprestimo" role="button">Inserir Empréstimo</a>
<br><br>

<table class="table table-hover table-striped" id="emprestimos">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome do Leitor</th>
      <th scope="col">Nome do Livro</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($linha = mysqli_fetch_array($consulta_emprestimos)){
      print'
    <tr>
      <th scope="row">'.$linha['nome_leitor'].'</th>';
      print '<td>'.$linha['nome_livro'].'</td>';
      ?>
      <td><a href="deleta_emprestimo.php?id_leitor_livro=<?php echo $linha['id_leitor_livro']; ?>"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    
    <?php
      }
    ?>
    
  </tbody>
</table>