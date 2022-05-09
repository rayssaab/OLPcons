<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="corpo">
    <div class="cabecalho">
        <h1 class="titulo"><br>Registro de Produtos</h1>
            <div class="form-produtos"><!-- form registro de produtos-->
                <form method="POST" action="funcao_registro_produto.php">
                <div class="nome-produto">
                    <label for="produto">Nome do produto a ser cadastrado:</label>
                    <input type="text" name="produto" placeholder="Insria o nome do produto">
                </div>
                <div class="descricao-produto">
                    <label for="descricao-produto">Descreva o produto que será cadastrado</label>
                    <input type="text" name="descricao-produto" placeholder="Insira a descrição do podruto que está sendo cadastrado">
                    <input type="submit" name="Entrar">
                </div>
                </form>         
            </div>
        </div>
    </div>
</div>
</body>
</html>