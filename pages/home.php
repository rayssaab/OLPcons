<?php
   include_once ('../arquivos/conexao.php');
    session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header("Location: login.php");
    }
    $sql = "SELECT * FROM usuario ORDER BY id DESC";
    $resulta = $conn->query($sql);
?>

<html>
  <head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>PAGINA INICIAL</title>
  </head>
  <body>
    <header class="header">
      <h1>Home</h1>
    </header>
    <div class="button"><br><br><br><br>
      <button><a class="btn btn-outline-dark" href="../pages/estoque.php">Estoque</a></button>
      <button><a class="btn btn-outline-dark" href="../pages/registro_marcas.php">Registro de Marca</a></button>
      <button><a class="btn btn-outline-dark" href="../pages/registro_clientes.php">Registro de Cliente</a></button>
      <button><a class="btn btn-outline-dark" href="../pages/registro_pedidos.php">Registro de Pedido</a></button>
      <button><a class="btn btn-outline-dark" href="../pages/registro_vendas.php">Registro de Vendas</a></button>
      <button><a class="btn btn-outline-dark" href="../pages/relatorio_vendas.php">Relatório de Vendas</a></button>
      <button><a class="btn btn-outline-dark" href="../arquivos/home/sair.php" >Sair </a></button>
      </div>
  </body>
</html>