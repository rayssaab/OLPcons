<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once ("../conexao.php");

    $nome_produto = $_POST['produto'];
	$descricao_produto = $_POST['descricao_produto'];
    $preco_produto = $_POST['preco_produto'];
    $revenda = $_POST['revenda'];

    /*print_r("Preço do produto: R$".$preco_produto."<br>");
    print_r("Preço da revenda: R$".$revenda."<br>");*/

    /*print_r($lucro."<br>");*/
    
    if($nome_produto== ""){
    	header("Location: ../../pages/registro_produtos.php?erro=O produto é inválido");
    }elseif($descricao_produto==""){
        header("Location: ../../pages/registro_produtos.php?erro=A descrição não é inválida");
    }

    if($preco_produto==""){
        header("Location: ../../pages/registro_produtos.php?erro=O valor do produto deve ser preenchido");
    }elseif($revenda==""){
        header("Location: ../../pages/registro_produtos.php?erro=O valor de revenda deve ser preenchido");
    }

    $lucro= $revenda-$preco_produto;

    if($lucro < $preco_produto){
        print_r("Seu lucro está abaixo do valor do produto
        <a href='../../pages/registro_produtos.php'>Editar</a>");
    }else{
        print_r("O seu lucro é de: R$".$lucro."<br>");
    }
    
        
    $cadastro_produto = $conn->query("INSERT INTO produto(nome_produto, descricao_produto) VALUE ('$nome_produto','$descricao_produto')");

    if($cadastro_produto==true){
        echo "<br>Produto cadastrado";
    }
}
?>
</body>
</html>