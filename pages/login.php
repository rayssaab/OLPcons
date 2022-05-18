<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form class="formLogin" method="POST" action="../arquivos/usuario/validacao.php">
<h3 class="usuario"> <label for="usuario">Usuário:</label></h3>
<input class="form-control" type="text" name="usuario" placeholder="insira seu nome">
<h3 class="senha"> <label for="senha">Senha:</label></h3>
<input class="form-control" type="password" name="senha" placeholder="insira sua senha">
<input class="btn btn-success" type="submit" value="Entrar">
</form>

</body>
</html>