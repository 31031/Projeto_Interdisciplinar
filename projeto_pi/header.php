<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<title>Biblioteca</title>
	<meta charset="UTF-8"/>
	
	 <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrety="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/estilo.css">
</head>

<body>
	<header>
		<div class="navbar navbar-dark bg-dark">
			<a href="?pagina=home"><img src="img/1.png"  title="Logo" alt="Logo"></a>
			<div id="menu">
				<a href="?pagina=livros">Livros</a>
				<a href="?pagina=leitores">Leitores</a>
				<a href="?pagina=emprestimos">Empréstimos</a>
				<?php if(isset($_SESSION['login'])){ ?>
					<a href="logout.php">
						<?php print $_SESSION['funcionario']; ?> (sair)
						</a>
				<?php } ?>
			</div>
		</div>
	</header>

	<div id="conteudo" class="container">

</body>