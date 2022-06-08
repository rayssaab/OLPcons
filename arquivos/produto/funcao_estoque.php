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

    /* Checando se o valor pago e o valor de revenda foram inseridos */

    if($valor_pago <=0 || $valor_pago == 0){
        header("Location: ../../pages/estoque.php?erro=O valor do produto não é valido");
        
    }else if($valor_revenda < 0){
        header("Location: ../../pages/estoque.php?erro=O valor de revenda não é valido");
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