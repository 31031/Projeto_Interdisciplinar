<?php

include 'db.php';

$id_leitor = $_GET['id_leitor'];


$query = "DELETE FROM LEITORES WHERE ID_LEITOR = $id_leitor";

mysqli_query($conexao, $query);

header('location:index.php?pagina=leitores');
 