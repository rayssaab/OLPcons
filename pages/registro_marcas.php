<?php
//permite o acesso apenas de cadastrados
include_once('../arquivos/conexao.php');
session_start();
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header("Location: login.php");
}
$sql = "SELECT * FROM usuario ORDER BY id DESC";
$resulta = $conn->query($sql);

//banco recebe dados e imprime na tabela
include_once('../arquivos/conexao.php');
$sql = "SELECT * FROM marca ORDER BY id_marca ";
$produto_banco = $conn->query($sql);
?>

<html>
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/r_pedidos.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <!--Classe p/ CSS!-->
    <div class="corpo">
    <div class="cabecalho">
        <div id="lista">

    <!--Tabela!-->
        <h1 class="titulo"><br>Tabela de Marcas</h1><br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <thead class="thead-dark">
                    <th scope="col">Nome</th>
                    <th scope="col">Lucratividade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($produto = mysqli_fetch_assoc($produto_banco)){
                echo "<tr>";
                echo "<td>".$produto['nome_marca']."</td>";
                echo "<td>".$produto['lucratividade']."</td>";
                echo "<td>
                    <a calss='btn btn-primary'href='../arquivos/marca/edit_marca.php?id=$produto[id_marca]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg>
                    </a>
                    <a class='btn btn-primary' href='../arquivos/marca/delete_marca.php/?id=$produto[id_marca]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg>
                    </a></td>";
                }
            ?>
            </tbody>
            </table>

    <!--Formulario-->         
        <h1 class="titulo">Registro de Marcas</h1><br>
        <div class="form-marca">
            <form method="POST" action="../arquivos/marca/funcao_registro_marca.php">
                <div class="nome_marca">
                    <label for="marca">Nome da Marca:</label>
                    <input type="text" name="marca"><br><br>
                </div>
                <div class="lucratividade">
                    <label for="lucratividade">Lucratividade:</label>
                    <input type="number" name="lucratividade"><br><br>
                </div>
                <div>
                    <input type="submit" class="btn btn-outline-dark" value="Registrar">
                </div>
            </form>
        </div>

<?php if (isset($_GET['erro'])) {
    echo $_GET['erro'];
    } 
?>
</body>
</html>
