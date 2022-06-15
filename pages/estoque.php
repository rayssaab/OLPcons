<?php
    include_once ('../arquivos/conexao.php');

    $sql = "SELECT * FROM estoque ORDER BY id_estoque ";

    $produto_banco = $conn->query($sql);

   // print_r($produto_banco);

 ?>
<html>
<head>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon" />
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
            <div id="lista">
                <h1 class="titulo"><br>Tabela de Produtos</h1><br>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Revenda</th>
                            <th scope="col">Valor do produto</th>
                            <th scope="col">Lucro</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            while ($produto = mysqli_fetch_assoc($produto_banco)){
                                echo "<tr>";
                                echo "<td>".$produto['id_estoque']."</td>";
                                echo "<td>".$produto['nome_produto']."</td>";
                                echo "<td>".$produto['marca_produto']."</td>";
                                echo "<td>".$produto['valor_revenda']."</td>";
                                echo "<td>".$produto['valor_pago']."</td>";
                                echo "<td>".$produto['lucro_produto']."</td>";
                                echo "<td>
                                <a calss='btn btn-primary'href='../arquivos/produto/edit_produto.php?id=$produto[id_estoque]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                                </a>
                                <a class='btn btn-danger' href='../arquivos/produto/delete_produto.php/?id=$produto[id_estoque]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                              </svg></a>
                                </td>";
                            }
                            
                        ?>
                    </tbody>
                </table>
          
            </div>
            <h1 class="titulo"><br>Registro de Produtos</h1><br><br><br>
            <div class="form-produtos">
                <!-- form registro de produtos-->
                <form method="POST" action="../arquivos/produto/funcao_estoque.php">
                    <div class="nome-produto">
                        <label for="produto">Nome do produto:</label>
                        <input type="text" name="produto"><br><br>
                    </div>
                    <div class="lucratividade">
                        <label for="valor_pago">Valor do produto:</label>
                        <input type="number" min="0" value="0" name="valor_pago"><br><br>
                        <label for="valor_revenda">Valor de revenda:</label>
                        <input type="number" min="0" value="0" name="valor_revenda"><br><br>
                    </div>
                    <div class="descricao-produto">
                        <label for="descricao-produto">Descreva o produto:</label>
                        <input type="text" name="descricao_produto"><br><br>
                        <input type="submit" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <br>
    <?php if (isset($_GET['erro'])) {
        echo $_GET['erro'];
    } ?>
</body>
</html>