<?php
// Importa a conexão
require_once 'config.php';

// Consulta para listar clientes
$sql = "SELECT Id_Cliente, Nome, Endereço, Cidade, Telefone FROM Clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Endereço</th><th>Cidade</th><th>Telefone</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Id_Cliente"] . "</td>";
        echo "<td>" . $row["Nome"] . "</td>";
        echo "<td>" . $row["Endereço"] . "</td>";
        echo "<td>" . $row["Cidade"] . "</td>";
        echo "<td>" . $row["Telefone"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum cliente encontrado.";
}

// Fechar conexão
$conn->close();
?>