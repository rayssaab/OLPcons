<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include_once('conexao.php');

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if($usuario == "") {
		header("Location: ../index.php?erro=usuario vazio");
		return;
	}
	else if($senha == "") {
		header("Location: ../index.php?erro=senha vazia");
		return;
	}

	$senha = sha1($senha);

	$result = $conn->query("INSERT INTO usuario(nome, senha) VALUE ('$usuario','$senha')");
	
	if($result == true){
	header("Location: menu.php");
	}else{
		header("Location: ../index.php");
	}
}?>
 </body>
</html>