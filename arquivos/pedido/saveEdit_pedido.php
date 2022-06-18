<?php
    include_once("../conexao.php");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id = $_POST['id_pedido'];
            $cliente = $_POST['cliente'];
            $produto = $_POST['produto'];
            $quantidade = $_POST['quantidade'];
            $data_entrega = $_POST['data_entrega'];
            print_r("ID do pedido:".$id."<br>Cliente: ".$cliente."<br>Produto: ".$produto."Quantidade:".$quantidade."Data de entrega:".$data_entrega);
            $sqlUpdate = "UPDATE pedido SET cliente='$cliente', produto='$produto', quantidade='$quantidade', data_entrega='$data_entrega' WHERE id_pedido='$id' ";
            $result= $conn->query($sqlUpdate);
            header("Location:../../pages/registro_pedidos.php");
    }
?>