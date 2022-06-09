<?php
include_once("../conexao.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = $_POST['id_estoque'];
    $nome_produto = $_POST['produto'];
    $valor_pago = $_POST['valor_pago'];
    $valor_revenda = $_POST['valor_revenda'];

    $lucro_produto=$valor_revenda-$valor_pago;
    
    print_r("Este é o ID do produto:".$id_estoque."<br>Nome do produto: ".$nome_produto."<br>Valor do produto: ".$valor_pago."<br>Valor de revenda:".$valor_revenda."<br>Lucro do produto;".$lucro_produto);

    $sqlUpdate= "UPDATE estoque SET nome_produto='$nome_produto', valor_revenda='$valor_revenda', valor_pago='$valor_pago' lucro_produto='$lucro_produto' WHERE id_estoque='$id' ";

    $result= $conn->query($sqlUpdate);

}
header("Location: ../../pages/estoque.php")

?>