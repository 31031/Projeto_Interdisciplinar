<h1 style="text-align:center">Bem-vindo</h1>

<form method="post" action="login.php">
	<input type="text" name="funcionario" placeholder="Nome do funcionário" class="form-control">
	<br>
	<input type="password" name="senha" placeholder="Digite a senha" class="form-control">
	<br>
	<input type="submit" value="entrar" class="btn btn-primary">
</form>
<br>

<?php if(isset($_GET['erro'])){ ?>

		<div class="alert alert-danger" role="alert">
			Usuário e/ou senha inválidos.
		</div>

<?php } ?>
