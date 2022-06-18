<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include_once ("../conexao.php");
                $nome_marca = $_POST['nome_marca'];
                $lucratividade = $_POST['lucratividade'];
                $cadastro_marca = $conn->query("INSERT INTO marca(nome_marca, lucratividade) VALUE ('$nome_marca', '$lucratividade')");
            if($cadastro_marca==true){
                header("Location: ../../pages/registro_marcas.php?Cadastrado");
        }
    }
?>