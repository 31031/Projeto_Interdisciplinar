<?php 

include 'db.php';
$id_livro      = $_POST['id_livro'];
$nome_livro    = $_POST['nome_livro'];
$genero_livro  = $_POST['genero_livro'];
$editora_livro = $_POST['editora_livro'];
$autor_livro   = $_POST['autor_livro'];
$quant_exemp   = $_POST['quant_exemp'];

$query ="UPDATE LIVROS SET nome_livro='$nome_livro', genero_livro='$genero_livro', editora_livro='$editora_livro', autor_livro='$autor_livro', quant_exemp=$quant_exemp WHERE id_livro=$id_livro";

mysqli_query($conexao, $query);

header('location:index.php?pagina=livros');