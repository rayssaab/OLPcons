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

        /*Checando se o produto foi informado*/
        if($nome_produto == ""){
            header("Location: ../../pages/estoque.php?erro=O nome do produto é inválido");
        }
        
    $valor_pago = $_POST['valor_pago'];
    $valor_revenda = $_POST['valor_revenda'];

    /*print_r("Preço do produto: R$".$preco_produto."<br>");
    print_r("Preço da revenda: R$".$revenda."<br>");*/

    /*print_r($lucro."<br>");*/
    
    /*Checando se o produto foi informado*/
    if($nome_produto == ""){
    	header("Location: ../../pages/estoque.php?erro=O produto é inválido");
    }
    
    /* Checando se o valor pago e o valor de revenda foram inseridos */

    
    if(empty($valor_pago) || $valor_pago == 0){
        // header("Location: ../../pages/estoque.php?erro=O valor do produto deve ser preenchido");
        echo $valor_pago;
        
    }else if($valor_revenda ==""){
        header("Location: ../../pages/registro_produtos.php?erro=O valor de revenda deve ser preenchido");
    }

    /*print_r("Nome: ".$nome_produto);
    print_r("<br> Valor: ".$valor_pago);
    print_r("<br> Revenda: ".$valor_revenda);
    */

    $lucro=$valor_revenda-$valor_pago;
    if($lucro <= -1){
        header("Location: ../../pages/estoque.php?erro=");
    }
    
    $cadastro_produto = $conn->query("INSERT INTO estoque(nome_produto, valor_pago, valor_revenda, lucro_produto) VALUE ('$nome_produto','$valor_pago','$valor_revenda', '$lucro')");

    if($cadastro_produto==true){
        header("Location: ../../pages/estoque.php?Cadastrado");
    }
}
?>
</body>
</html>