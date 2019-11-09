<h3>Inserir novo Empréstimo</h3><br>

<form  method="post" action="processa_emprestimo.php">
 <div class="form-group">
    <label for="exampleFormControlSelect1">Leitor</label>
    <select class="form-control" id="exampleFormControlSelect1" name="escolha_leitor">
      <option>Selecione um leitor</option>
      <?php
     	
     	while($linha = mysqli_fetch_array($consulta_leitores)){
			print '<option value="'.$linha['id_leitor'].'">'.$linha['nome_leitor'].'</option>';
		}
		?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Livros</label>
    <select class="form-control" id="exampleFormControlSelect1" name="escolha_livro">
     <option>Selecione um livro</option>
		<?php
		while($linha = mysqli_fetch_array($consulta_livros)){
			print '<option value="'.$linha['id_livro'].'">'.$linha['nome_livro'].'</option>';
		}
		?>
    </select><br>
     <input class="btn btn-dark" type="submit" value="emprestar">
  </div>
  
 </form>