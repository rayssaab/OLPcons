<?php
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header("Location: ../../pages/login.php");
?>
<html>
    <body>
        <h1>Hello</h1>
    </body>
</html>