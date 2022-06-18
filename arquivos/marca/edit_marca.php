<?php
include_once('../conexao.php');

if(!empty($_GET['id'])){
    $id= $_GET['id'];
    $sqlSelect = "SELECT * FROM marca WHERE id_marca=$id";
    $resulte_banco = $conn->query($sqlSelect);

if($resulte_banco->num_rows>0){
        
    while($marca = mysqli_fetch_assoc($resulte_banco)){
    $nome_marca = $marca['nome_marca'];
    $lucratividade = $marca ['lucratividade'];
    }
  }
}
?>

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/r_marcas.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <legend class="legenda">Edite a marca</legend>
<form method="POST" action="saveEdit_marca.php">
    <div class="nome_marca">
        <label for="nome_marca">Nome da marca:</label>
        <input type="text" name="nome_marca" value="<?php echo $nome_marca;?>"><br><br>
    </div>
    <div class="lucratividade">
        <label for="lucratividade">Lucratividade:</label>
        <input type="number" name="lucratividade" value="<?php echo $lucratividade;?>"><br><br>
    </div>
        <input type="hidden" name="id_marca" value="<?php echo "$id"?>">
        <input type="submit" value="Atualizar"> 
        <a class="a" href="../../pages/registro_marcas.php">Voltar</a>
</body>
</html>