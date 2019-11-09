<?php

include 'db.php';

$id_leitor_livro = $_GET['id_leitor_livro'];


$query = "DELETE FROM LEITORES_LIVROS WHERE ID_LEITOR_LIVRO = $id_leitor_livro";

mysqli_query($conexao, $query);

header('location:index.php?pagina=emprestimos');
 