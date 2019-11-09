<?php

include'db.php';

$id_leitor = $_POST['escolha_leitor'];
$id_livro = $_POST['escolha_livro'];

$query = "INSERT INTO LEITORES_LIVROS(id_leitor, id_livro) VALUES($id_leitor, $id_livro)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=emprestimos');