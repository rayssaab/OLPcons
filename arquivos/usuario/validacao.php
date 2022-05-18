<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        
        include_once('../conexao.php');

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        

        if($usuario == ""){
        
            //Nega o acesso
            header('Location: ../../pages/login.php');
            return;
        }
        else if($senha == ""){
            header("Location: ../../pages/login.php?");
            return;
        }


        //Acessa o sistema
        $sql = "SELECT * FROM usuario WHERE nome = '$usuario' and senha = '$senha'";
        $resultado = $conn->query($sql);
        
        //print_r($sql);
        //print_r($resultado);

    if(mysqli_num_rows($resultado) < 1){

        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../../pages/login.php');
    
    }else{
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: ../menu.php');
    }

    }
?>