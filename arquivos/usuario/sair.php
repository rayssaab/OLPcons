<?php
//função parar sair do sistema
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header("Location: ../../pages/login.php");
?>