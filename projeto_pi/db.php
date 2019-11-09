<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "trabalho_pi";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM LIVROS";
$consulta_livros = mysqli_query($conexao, $query);

$query = "SELECT * FROM LEITORES";
$consulta_leitores = mysqli_query($conexao, $query);

$query = "SELECT leitores_livros.id_leitor_livro, leitores.nome_leitor, livros.nome_livro 
			FROM LEITORES, LIVROS, LEITORES_LIVROS
			WHERE leitores_livros.id_leitor = leitores.id_leitor
			AND  leitores_livros.id_livro = livros.id_livro";
$consulta_emprestimos = mysqli_query($conexao, $query);
