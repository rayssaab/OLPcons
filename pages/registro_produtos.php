<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="corpo">
    <div class="cabecalho">
        <h1 class="titulo"><br>Registro de Produtos</h1><br>
            <div class="form-produtos"><!-- form registro de produtos-->
                <form method="POST" action="../arquivos/produto/funcao_registro_produto.php">
                <div class="nome-produto">
                    <label for="produto">Nome do produto a ser cadastrado:</label>
                    <input type="text" name="produto"><br>
                </div>
                <div class="lucratividade">
                    <label for="preco_produto">Valor do produto:</label>
                    <input type="text" name="preco_produto"><br>
                    <label for="preco_venda">Valor de revenda</label>
                    <input type="text" name="revenda"><br>
                </div>
                <div class="descricao-produto">
                    <label for="descricao-produto">Descreva o produto que será cadastrado</label><br>
                    <input type="text" name="descricao_produto"><br>
                    <input type="submit" name="Entrar">
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