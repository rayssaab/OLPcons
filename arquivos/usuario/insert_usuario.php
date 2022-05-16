<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php	
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include_once('../conexao.php');

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if($usuario == ""){
		header("Location: ../../pages/login.php?erro=O usuário é inválido");
		return;
	}
	else if($senha == ""){
		header("Location: ../../pages/login.php?erro=A senha é inválida");
		return;
	}
	$senha = sha1($senha);

	$result = $conn->query("INSERT INTO usuario(nome, senha) VALUE ('$usuario','$senha')");
	
	if($result == true){
		echo"Registrado";
		header("Location: ../menu.php");
	}else{
		header("Location: ../../index.php");
	}
}?>
 </body>
</html>