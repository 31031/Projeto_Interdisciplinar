<?php 

include 'db.php';
 
$funcionario = addslashes($_POST['funcionario']);
$senha = addslashes($_POST['senha']);

$query = "SELECT * FROM FUNCIONARIOS WHERE FUNCIONARIO = '$funcionario' and SENHA = '$senha'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){

	session_start();

	$_SESSION['login'] = true;
	$_SESSION['funcionario'] = $funcionario;

	header('location:index.php');
}
else{
	header('location:index.php?erro');
}

?>