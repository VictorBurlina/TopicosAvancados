<?php
$servername = "db"; // <--- nome do serviço MySQL no docker-compose
$username = "root";
$password = "root";
$dbname = "Clientes";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
