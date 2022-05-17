<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    //função para registro de produtos
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once ("../conexao.php");
    
    $nome_produto = $_POST['produto'];
	$descricao_produto = $_POST['descricao-produto'];

    //checando se o produto é vazio ou não
    if($nome_produto == "") {
        header("Location: ../../pages/registro_produtos.php?erro=O nome do produto é inválido");
		return;
	}
	else if($descricao_produto == "") {
        header("Location: ../../pages/registro_produtos.php?erro=A descrição do produto é inválida");
        return;
	}}

    //inserindo produto no banco
    $registro = $conn->query("INSERT INTO produto(nome_produto, descricao_produto) VALUE('$nome_produto','$descricao_produto')");

    if($registro==true){
        header("Location: ../../pages/tabela_de_produtos.php");

    }else{
        header("Location: ../../registro_produtos.php");
    }?>
</body>
</html>