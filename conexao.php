<?php
$servername = "localhost";
$database = "olpcons";
$username = "root";
$password = "";
//criando conexão com banco de dados
$conn = new mysqli($servername, $username, $password, $database);
//checando conexão com banco de dados
if (!$conn) {
    die("Connection failed: " . new mysqli());
}

?>