<?php


include'db.php';

$nome_leitor     = $_POST['nome_leitor'];
$rg_leitor       = $_POST['rg_leitor'];
$endereco_leitor = $_POST['endereco_leitor'];
$email_leitor    = $_POST['email_leitor'];
$data_nascimento = $_POST['data_nascimento'];
$telefone_leitor = $_POST['telefone_leitor'];

$query = "INSERT INTO LEITORES(nome_leitor, rg_leitor, endereco_leitor, email_leitor, data_nascimento, telefone_leitor) VALUES('$nome_leitor', '$rg_leitor', '$endereco_leitor', '$email_leitor','$data_nascimento', '$telefone_leitor')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=leitores');

?>