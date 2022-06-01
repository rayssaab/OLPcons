<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/r_produtos.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <html>
</head>
<body>
<div class="corpo">
    <div class="cabecalho">
        <h1 class="titulo"><br>Registro de Produtos</h1><br>
            <div class="form-produtos"><!-- form registro de produtos-->
                <form class="row g-3" method="POST" action="../arquivos/produto/funcao_registro_produto.php">
                <div class="col-auto">
                    <label for="produto" class="visually-hidden">Nome do produto:</label>
                    <input type="text" name="produto" class="form-control-plaintext"><br>
                </div>
                <div class="col-auto">
                    <label for="preco_produto" class="visually-hidden">Valor do produto:</label>
                    <input type="text" name="preco_produto">
                    <label for="preco_venda">Valor de revenda:</label>
                    <input type="text" name="revenda"class="form-control-plaintext"><br>
                </div>
                <div class="col-auto">
                    <label for="descricao-produto" class="visually-hidden">Descreva o produto:</label>
                    <input type="text" name="descricao_produto">
                    <input type="submit" name="Entrar" class="form-control-plaintext">
                </div>
                </form> 
            </div>
        </div>
    </div>
</div>
<br>
<?php if(isset($_GET['erro'])) {
          echo $_GET['erro'];
          }?>
</body>
</html>