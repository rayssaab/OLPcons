<?php
    include_once ('conexao.php');

    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header("Location: ../pages/login.php");
    }

    $sql = "SELECT * FROM usuario ORDER BY id DESC";

    $resulta = $conn->query($sql);

    //print_r($resulta);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title></title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <p>Seja bem vindo</p>
<div class="links">
    <ul>
    <a href="../arquivos/usuario/sair.php">Sair do sistema</a>
    <a href="../pages/registro_produtos.php">Registrar pordutos</a>
    </ul>
</div>
        <div>
            <table class="tabela">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Senha</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while($user_data=mysqli_fetch_assoc($resulta)){
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['senha']."</td>";
                }

                ?>
                </tbody>
            </table>
        </div>

</body>
</html>