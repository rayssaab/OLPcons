<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include_once ("../conexao.php");
                $cliente = $_POST['cliente'];
                $produto = $_POST['produto'];
                $quantidade = $_POST['quantidade'];
                $data_entrega = $_POST['data_entrega'];
                $cadastro_pedido = $conn->query("INSERT INTO pedido(cliente, produto, quantidade, data_entrega) VALUE ('$cliente', '$produto', '$quantidade', '$data_entrega')");
            if($cadastro_pedido==true){
                header("Location: ../../pages/registro_pedidos.php?Cadastrado");
        }
    }
?>