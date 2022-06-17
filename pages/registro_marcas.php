<?php
//impede o acesso de não usuários
include_once('../arquivos/conexao.php');
session_start();
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header("Location: login.php");
}
$sql = "SELECT * FROM usuario ORDER BY id DESC";
$resulta = $conn->query($sql);

//tabela recebe dados do banco
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
        <h1 class="titulo"><br>Registro de Marcas</h1><br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <thead class="thead-dark">
                    <th>
                    <th scope="col">Nome</th>
                    <th>
                    <th scope="col">Lucratividade</th>
                    <th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>                     
                </tr>
                <!--<tr> <th scope="row"></th> <td></td> <td></td> <td></td> <td></td> </tr> <tr> <th scope="row"></th>
<td colspan="2"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td colspan="3"></td>
                    <td></td>
                </tr>-->
            </tbody>
        </table>

    <!--Formulario-->         
        <h1 class="titulo">Registro de Marcas</h1><br>
        <div class="form-marca">
            <form method="POST" action="../arquivos/produto/funcao_registro_produto.php">
                <div class="nome-produto">
                    <label for="produto">Nome do Poduto:</label>
                    <input type="text" name="produto"><br><br>
                </div>
                <div class="lucratividade">
                    <label for="lucro">Lucratividade:</label>
                    <input type="text" name="lucro_produto"><br><br>
                </div>
                    <button type="button" class="btn btn-outline-dark">Enviar</button>
            </form>
        </div>

<?php if (isset($_GET['erro'])) {
    echo $_GET['erro'];
    } 
?>
</body>

</html>
