<?php
    if(!empty($_GET['id'])){
        include_once('../conexao.php');
        $id= $_GET['id'];
        $sqlSelect = "SELECT * FROM pedido WHERE id_pedido=$id";
        $result = $conn->query($sqlSelect);
    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM pedido WHERE id_pedido=$id";
        $resultDelete = $conn->query($sqlDelete);
        }
    }
    header("Location: ../../../pages/registro_pedidos.php");
?>