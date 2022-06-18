<?php
    if(!empty($_GET['id'])){
        include_once('../conexao.php');
        $id= $_GET['id'];
        $sqlSelect = "SELECT * FROM marca WHERE id_marca=$id";
        $result = $conn->query($sqlSelect);
    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM marca WHERE id_marca=$id";
        $resultDelete = $conn->query($sqlDelete);
        }
    }
    header("Location: ../../../pages/registro_marcas.php");
?>