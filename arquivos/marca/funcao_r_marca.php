<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include_once ("../conexao.php");

        $nome_marca = $_POST['nome_marca'];
        $lucratividade = $_POST['lucratividade'];

        if($nome_marca == ""){
            header("Location: ../../pages/registro_marcas.php?marca=O nome da marca não foi informado");
            return;
        }
        if($lucratividade < 0){
            header("Location: ../../pages/registro_marcas.php?lucratividade=A lucratividade não foi informada");
            return;
        }
        $cadastro_marca = $conn->query("INSERT INTO marca(nome_marca, lucratividade) VALUE ('$nome_marca', '$lucratividade')");
        
        if($cadastro_marca==true){
            header("Location: ../../pages/registro_marcas.php?Cadastrado");
        }
    }
?>