<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once ("../conexao.php");
            $nome_marca = $_POST['nome_marca'];
            $lucratividade = $_POST['lucratividade'];
            
            /*Checando se a marca foi informada
        if($nome_marca == ""){
            header("Location: ../../pages/registro_marcas.php?erro=O nome da marca deve ser preenchido");
            }
            $cadastro_marca = $conn->query("INSERT INTO registro_marcas(nome_marca, lucratividade) VALUE ('$nome_marca', '$lucratividade')");
        if($cadastro_produto==true){
            header("Location: ../../pages/registro_marcas.php?Cadastrado");
        }
            /*Checando se a lucratividade foi informada
        if($lucratividade == 0){
            header("Location: ../../pages/registro_marcas.php?erro=A lucratividade deve ser preenchida");
        }*/
            $cadastro_marca = $conn->query("INSERT INTO marca(nome_marca, lucratividade) VALUE ('$nome_marca', '$lucratividade')");
        if($cadastro_marca==true){
            header("Location: ../../pages/registro_marcas.php?Cadastrado");
        }
    }
?>