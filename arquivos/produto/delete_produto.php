<?php
    if(!empty($_GET['id'])){
        include_once('../conexao.php');
        
        // consulta o banco para ver se existe um produto com o id informado
        $id= $_GET['id'];

        $sqlSelect = "SELECT * FROM estoque WHERE id_estoque=$id";
        $result = $conn->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM estoque WHERE id_estoque=$id";
        $resultDelete = $conn->query($sqlDelete);
        }
    }
    header("Location: ../../../pages/estoque.php?delete=Produto deletado");
?>