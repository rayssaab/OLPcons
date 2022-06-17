<?php
include_once('../conexao.php');

if(!empty($_GET['id'])){
    $id= $_GET['id'];
    $sqlSelect = "SELECT * FROM estoque WHERE id_estoque=$id";
    $resulte_banco = $conn->query($sqlSelect);

if($resulte_banco->num_rows>0){
        
    while($produto = mysqli_fetch_assoc($resulte_banco)){
    $nome_produto = $produto['nome_produto'];
    $marca_produto = $produto['marca_produto'];
    $valor_pago = $produto['valor_pago'];
    $valor_revenda = $produto['valor_revenda'];
    $lucro = $produto ['lucro_produto'];
    }
}
}
?>

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/r_produtos.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <legend class="nome_produto">Edite o produto</legend>
<form method="POST" action="saveEdit_produto.php">
    <div class="nome_produto">
        <label for="nome_produto">Nome do produto:</label>
        <input type="text" name="nome_produto" value="<?php echo $nome_produto;?>"><br><br>
    </div>
    <div class="marca_produto">
        <label for="marca_produto">Marca:</label>
        <input type="text" name="marca_produto" value="<?php echo $marca_produto;?>"><br><br>
    </div>
    <div class="valor_pago">
        <label for="valor_pago">Valor do produto:</label>
        <input type="number" name="valor_pago" value="<?php echo $valor_pago;?>"><br><br>
    </div>
    <div class="valor_revenda">
        <label for="valor_revenda">Valor de revenda:</label>
        <input type="number" name="valor_revenda" value="<?php echo $valor_revenda;?>"><br><br>
    </div>
    <div class="descricao-produto">
        <label for="descricao-produto">Descreva o produto:</label>
        <input type="text" name="descricao_produto"><br><br>
    </div>
        <input type="hidden" name="id_estoque" value="<?php echo "$id"?>">
        <input type="submit" value="Atualizar"> 
        <a class="a" href="../../pages/estoque.php">Voltar</a>
</body>
</html>