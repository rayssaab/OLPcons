<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
  include_once('../arquivos/tabela.php');

$a = $conn->query("SELECT id, nome, senha, email FROM usuario");


if ($a->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Nome</th><th>Email</th></tr>";
  // output data of each row
  while($row = $a->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["email"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>
</body>
</html>