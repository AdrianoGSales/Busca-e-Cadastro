<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id20420987_driks"; // usuário do MySQL
$pass = "g~&Ky2m@92#*]1W9"; // senha do MySQL
$dbname = "id20420987_telainicial"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
