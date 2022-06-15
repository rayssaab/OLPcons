<?php

    if(!empty($_GET['id'])){
        include_once('../conexao.php');


        $id= $_GET['id'];

        $sqlSelect = "SELECT * FROM estoque WHERE id_estoque=$id";
    
        $result = $conn->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM estoque WHERE id_estoque=$id";
            $resultDelete = $conn->query($sqlDelete);
        }
    }
    header("Location: ../../../pages/estoque.php");
   
?>