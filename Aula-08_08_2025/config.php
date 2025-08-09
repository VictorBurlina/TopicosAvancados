<?php
// config.php
$servername = "localhost";  // ou o seu servidor
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "Clientes";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
