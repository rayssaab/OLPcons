<?php
	$servidor = 'localHost';
	$usuario = 'root';
	$senha = '';
	$banco = 'olpcons';

	//criando conexão com banco de dados

	$conn = new mysqli($servidor, $usuario, $senha, $banco);
	//checando conexão com o banco
	if($conn->connect_errno){
		echo "erro";
	}
?>