<?php

include'db.php';

$nome_livro = $_POST['nome_livro'];
$genero_livro = $_POST['genero_livro'];
$editora_livro = $_POST['editora_livro'];
$autor_livro = $_POST['autor_livro'];
$quant_exemp = $_POST['quant_exemp'];

$query = "INSERT INTO LIVROS(nome_livro, genero_livro, editora_livro, autor_livro, quant_exemp) VALUES('$nome_livro', '$genero_livro', '$editora_livro', '$autor_livro', $quant_exemp)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=livros');