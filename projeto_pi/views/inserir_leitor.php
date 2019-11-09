<?php if(!isset($_GET['editar'])){ ?>

<form  method="post" action="processa_leitor.php">
  <div class="form-group">
    <label for="formGroupExampleInput">Nome do novo leitor: </label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="nome_leitor" placeholder="Insira o nome do leitor">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">RG do leitor: </label>
    <input type="number" class="form-control" id="formGroupExampleInput" name="rg_leitor" placeholder="Insira o RG do leitor">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Endereço: </label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="endereco_leitor" placeholder="Insira o endereço do leitor">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">E-mail: </label>
    <input type="email" class="form-control" id="formGroupExampleInput" name="email_leitor" placeholder="Insira o e-mail do leitor">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Data de nascimento: </label>
    <input type="date" class="form-control" id="formGroupExampleInput" name="data_nascimento" placeholder="Insira a data de nascimento do leitor">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Telefone: </label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="telefone_leitor" placeholder="Insira o telefone do leitor">
  </div>
    <input class="btn btn-dark" type="submit" value="Inserir">
</form>

<?php } else{ ?>
	<?php while($linha = mysqli_fetch_array($consulta_leitores)){ ?>
		<?php if($linha['id_leitor'] == $_GET['editar']){ ?>

<form  method="post" action="edita_leitor.php">
	 <div class="form-group">
	 	<input type= "hidden" name="id_leitor" value="<?php print $linha['id_leitor']; ?>">
	    <label for="formGroupExampleInput">Nome do leitor:</label>
	    <input type="text" class="form-control" id="formGroupExampleInput" name="nome_leitor" placeholder="Insira o nome do leitor" value="<?php print $linha['nome_leitor']; ?>">
	 </div>
	 <div class="form-group">
	    <label for="formGroupExampleInput">RG do leitor:</label>
	    <input type="text" class="form-control" id="formGroupExampleInput" name="rg_leitor" placeholder="Insira o RG do leitor" value="<?php print $linha['rg_leitor']; ?>">
	 </div>
	 <div class="form-group">
	    <label for="formGroupExampleInput">Endereço do leitor:</label>
	    <input type="text" class="form-control" id="formGroupExampleInput" name="endereco_leitor" placeholder="Insira o endereço do leitor" value="<?php print $linha['endereco_leitor']; ?>">
	 </div>
	 <div class="form-group">
	    <label for="formGroupExampleInput">E-mail do leitor:</label>
	    <input type="text" class="form-control" id="formGroupExampleInput" name="email_leitor" placeholder="Insira o E-mail do leitor" value="<?php print $linha['email_leitor']; ?>">
	 </div>
	 <div class="form-group">
	    <label for="formGroupExampleInput">data de nascimento:</label>
	    <input type="date" class="form-control" id="formGroupExampleInput" name="data_nascimento" placeholder="Insira a data de nascimento do leitor" value="<?php print $linha['data_nascimento']; ?>">
	 </div>
	 <div class="form-group">
	    <label for="formGroupExampleInput2">Telefone: </label>
	    <input type="number" class="form-control" id="formGroupExampleInput2" name="telefone_leitor" placeholder="Insira a telefone do leitor" value="<?php print $linha['telefone_leitor']; ?>"><br>
	    <input class="btn btn-dark" type="submit" value="Editar">
	  </div>
</form>

		<?php } ?>
	<?php } ?>
<?php } ?>