<?php
    include_once("../conexao.php");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id = $_POST['id_marca'];
            $nome_marca = $_POST['marca'];
            $lucratividade = $_POST['lucratividade'];
            print_r("ID da marca:".$id."<br>Nome da marca: ".$nome_marca."<br>Lucratividade da marca: ".$lucratividade);
            $sqlUpdate = "UPDATE marca SET nome_marca='$nome_marca', lucratividade='$lucratividade' WHERE id_marca='$id' ";
            $result= $conn->query($sqlUpdate);
            header("Location:../../pages/registro_marcas.php");
        }
?>