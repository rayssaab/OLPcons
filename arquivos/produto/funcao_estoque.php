<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once ("../conexao.php");

    $nome_produto = $_POST['nome_produto'];
    $marca_produto = $_POST['marca_produto'];
    $valor_pago = $_POST['valor_pago'];
    $valor_revenda = $_POST['valor_revenda'];

    
    // Checando se os dados estão corretos
    if($nome_produto == "" || $marca_produto == ""){
        header("Location:../../pages/estoque.php?erro=O nome ou a marca do produto estão vazios");
        return;
    }

    $lucratividade = $valor_revenda-$valor_pago;

    if($lucratividade<0){
        header("Location:../../pages/estoque.php?erro=O seu lucro é inferior a 0");
        return;
    }else{
    $cadastro_produto = $conn->query("INSERT INTO estoque(nome_produto, marca_produto, valor_revenda, valor_pago, lucro_produto ) VALUE ('$nome_produto', '$marca_produto', '$valor_revenda', '$valor_pago', '$lucratividade' )");}

    if($cadastro_produto == TRUE){
        header("Location:../../pages/estoque.php?erro=Cadastrado");
    }

}
?>