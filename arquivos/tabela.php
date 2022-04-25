<?php
	$servidor = 'localHost';
	$usuario = 'root';
	$senha = '';
	$banco = 'leandro';

	$conn = new mysqli($servidor, $usuario, $senha, $banco);

	if($conn->connect_errno){
		echo "erro";
	}else 
	{
	echo "conectado";
}


 ?>