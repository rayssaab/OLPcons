<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>    <!-- cadastro de usuário-->
  <div class="form-group">
        <h3 class="text-center"> Cadastro de usuário</h3><br>
          <form name="formLogin" method="POST" action="arquivos/insert.php">
            <label for="usuario">Usuário</label>
            <input class="form-control" type="text" name="usuario" placeholder="Insira seu nome">
            <label for="senha">Senha</label>
            <input class="form-control" type="password" name="senha" placeholder="Insira sua senha">
            <input class="btn" type="submit" name="Entrar">
      </div>
      <?php 
        if(isset($_GET['erro'])) {
          echo $_GET['erro'];
        }
      ?>
    </form>
  </body>
</html>