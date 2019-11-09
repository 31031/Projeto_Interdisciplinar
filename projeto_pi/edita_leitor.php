<?php 

include 'db.php';

$id_leitor = $_POST['id_leitor'];
$nome_leitor = $_POST['nome_leitor'];
$rg_leitor = $_POST['rg_leitor'];
$endereco_leitor = $_POST['endereco_leitor'];
$email_leitor = $_POST['email_leitor'];
$data_nascimento = $_POST['data_nascimento'];
$telefone = $_POST['telefone_leitor'];


$query ="UPDATE LEITORES SET nome_leitor='$nome_leitor', rg_leitor='$rg_leitor', endereco_leitor='$endereco_leitor', email_leitor='$email_leitor',data_nascimento='$data_nascimento', telefone_leitor='$telefone_leitor' WHERE id_leitor = $id_leitor";

mysqli_query($conexao, $query);

header('location:index.php?pagina=leitores');