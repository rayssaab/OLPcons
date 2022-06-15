<?php
include_once('../conexao.php');

if(!empty($_GET['id'])){


    $id= $_GET['id'];

    $sqlSelect = "SELECT * FROM estoque WHERE id_estoque=$id";

    $resulte_banco = $conn->query($sqlSelect);

    //print_r($resulte_banco);

    if($resulte_banco->num_rows>0){
        
        while($produto = mysqli_fetch_assoc($resulte_banco)){
        $nome_produto = $produto['nome_produto'];
        $valor_pago = $produto['valor_pago'];
        $valor_revenda = $produto['valor_revenda'];
        $lucro = $produto ['lucro_produto'];
    }
    //print_r($nome_produto);
}

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/r_produtos.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <legend class="nome-produto">Edite o produto</legend>
    <a href="../../pages/estoque.php">Voltar</a>
<form method="POST" action="saveEdit_produto.php">
    <div class="nome-produto">
        <label for="produto">Nome do produto:</label>
        <input type="text" name="produto" value="<?php echo $nome_produto;?>"><br><br>
    </div>
    <div class="lucratividade">
        <label for="valor_pago">Valor do produto:</label>
        <input type="number" name="valor_pago" value="<?php echo $valor_pago;?>"><br><br>
        <label for="valor_revenda">Valor de revenda:</label>
        <input type="number" name="valor_revenda" value="<?php echo $valor_revenda;?>"><br><br>
    </div>
    <div class="descricao-produto">
        <label for="descricao-produto">Descreva o produto:</label>
        <input type="text" name="descricao_produto"><br><br>

        <input type="hidden" name="id_estoque" value="<?php echo "$id"?>">
        <input type="submit" value="Atualizar">
</body>
</html>