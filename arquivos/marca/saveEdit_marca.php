<?php
include_once("../conexao.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    $id = $_POST['id_marca'];
    $nome_marca = $_POST['nome_marca'];
    $lucratividade = $_POST['lucratividade'];

    $sqlUpdate = "UPDATE marca SET nome_marca='$nome_marca', lucratividade='$lucratividade' WHERE id_marca='$id'";
    $result= $conn->query($sqlUpdate);
    header("Location:../../pages/registro_marcas.php");
    }
?>