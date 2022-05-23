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
		header("Location: ../../pages/registro_de_usuario.php?erro=O usuário é inválido");
		return;
	}
	else if($senha == ""){
		header("Location: ../../pages/registro_de_usuario.php?erro=A senha é inválida");
		return;
	}

	$result = $conn->query("INSERT INTO usuario(nome, senha) VALUE ('$usuario','$senha')");
	
	if($result == true){
		echo"Registrado";
		header("Location: ../../index.php");
	}else{
		header("Location: ../../pages/registro_de_usuario.php");
	}
}?>
 </body>
</html>