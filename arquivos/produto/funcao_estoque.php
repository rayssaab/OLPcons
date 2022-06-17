<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once ("../conexao.php");
            $nome_produto = $_POST['nome_produto'];
            $marca_produto = $_POST['marca_produto'];
            /*Checando se o produto foi informado*/
        if($nome_produto == ""){
            header("Location: ../../pages/estoque.php?erro=O nome do produto é inválido");
            }
            $valor_pago = $_POST['valor_pago'];
            $valor_revenda = $_POST['valor_revenda'];
        if($nome_produto == ""){
            header("Location: ../../pages/estoque.php?erro=O produto é inválido");
        }
            /* Checando se o valor pago e o valor de revenda foram inseridos */
        if(empty($valor_pago) || $valor_pago == 0){
            echo $valor_pago;  
        }else if($valor_revenda ==""){
            header("Location: ../../pages/registro_produtos.php?erro=O valor de revenda deve ser preenchido");
        }
            $lucro=$valor_revenda-$valor_pago;
        if($lucro <= -1){
            header("Location: ../../pages/estoque.php?erro=");
        }
            $cadastro_produto = $conn->query("INSERT INTO estoque(nome_produto, marca_produto, valor_pago, valor_revenda, lucro_produto) VALUE ('$nome_produto', '$marca_produto', '$valor_pago','$valor_revenda', '$lucro')");
        if($cadastro_produto==true){
            header("Location: ../../pages/estoque.php?Cadastrado");
        }
    }
?>