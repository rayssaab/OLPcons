<?php
include_once('../conexao.php');

if(!empty($_GET['id'])){
    $id= $_GET['id'];
    $sqlSelect = "SELECT * FROM pedido WHERE id_pedido=$id";
    $resulte_banco = $conn->query($sqlSelect);

if($resulte_banco->num_rows>0){
        
    while($pedido = mysqli_fetch_assoc($resulte_banco)){
    $cliente = $cliente['cliente'];
    $lproduto = $produto ['produto'];
    $quantidade = $quantidade ['quatidade'];
    $data_entrega = $data_entrega ['data_entrega'];
    }
  }
}
?>

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/r_pedido.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <legend class="legenda">Edite o pedido</legend>
<form method="POST" action="saveEdit_pedido.php">
    <div class="cliente">
        <label for="cliente">Cliente:</label>
        <input type="text" name="cliente" value="<?php echo $cliente;?>"><br><br>
    </div>
    <div class="produto">
        <label for="produto">Produto:</label>
        <input type="text" name="produto" value="<?php echo $produto;?>"><br><br>
    </div>
    <div class="quantidade">
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" value="<?php echo $quantidade;?>"><br><br>
    </div>
    <div class="data_entrega">
        <label for="data_entrega">Data de entrega:</label>
        <input type="date" name="data_entrega" value="<?php echo $data_entrega;?>"><br><br>
    </div>
        <input type="hidden" name="id_pedido" value="<?php echo "$id"?>">
        <input type="submit" value="Atualizar"> 
        <a class="a" href="../../pages/registro_pedidos.php">Voltar</a>
</body>
</html> 