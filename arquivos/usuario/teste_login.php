<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Validação de usuário</title>
</head>
<body>
<?php
    
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){    
        //acesso ao sistema
        include_once "../conexao.php";

       
        print_r('Usuario:' . $usuario);
        print_r('Senha:' . $senha);

    }else{
        //não acessa o sistema
    header("Location: ../../pages/login.php");
    }

    /*if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
        include_once('../conexao.php');

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        print_r($usuario);

    }*/
?>    
</body>
</html>