<?php
//09/11/2019 última versão atualizada
// programadores : Breno Henrique, Eudson, João Guilherme, Matheus Sousa,Willian Santos, Yuri Araújo 
session_start();

include 'db.php';

include 'header.php';

if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'livros';
	}
}
else{
	$pagina = 'home';
}

switch (@$pagina){
	case'livros':include'views/livros.php'; break;
	case'inserir_livro':include'views/inserir_livro.php'; break;
	case'leitores':include'views/leitores.php'; break;
	case'inserir_leitor':include'views/inserir_leitor.php'; break;
	case'emprestimos':include'views/emprestimos.php'; break;
	case'inserir_emprestimo':include'views/inserir_emprestimo.php'; break;
	default:include 'views/home.php';break;
}

include 'footer.php';
 
