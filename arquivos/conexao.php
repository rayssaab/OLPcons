<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(isset($_POST['Enviar'])){
	include_once('../arquivos/tabela.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = sha1($_POST['senha']);

	$result= mysqli_query($conn, "INSERT INTO usuario(nome, email, senha) VALUE ('$nome','$email','$senha')");
	header("Location: ../index.php");}?>


</body>
</html>