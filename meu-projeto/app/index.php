<?php
require_once 'config.php';

// Consulta para listar clientes
$sql = "SELECT Id_Cliente, Nome, Endereco, Cidade, Telefone FROM Clientes";
$result = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            margin: 40px;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 20px;
            text-align: left;
        }
        th {
            background-color: #2980b9;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        tr:nth-child(even) {
            background-color: #ecf0f1;
        }
        tr:hover {
            background-color: #d1e7fd;
        }
        caption {
            caption-side: top;
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #34495e;
        }
        .no-data {
            text-align: center;
            margin-top: 50px;
            font-size: 1.2em;
            color: #7f8c8d;
        }
    </style>
</head>
<body>

    <h1>Clientes Cadastrados</h1>

    <?php if ($result && $result->num_rows > 0): ?>
        <table>
            <caption>Lista de Clientes</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row["Id_Cliente"]) ?></td>
                        <td><?= htmlspecialchars($row["Nome"]) ?></td>
                        <td><?= htmlspecialchars($row["Endereco"]) ?></td>
                        <td><?= htmlspecialchars($row["Cidade"]) ?></td>
                        <td><?= htmlspecialchars($row["Telefone"]) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="no-data">Nenhum cliente encontrado.</div>
    <?php endif; ?>

</body>
</html>

<?php
$conn->close();
?>
