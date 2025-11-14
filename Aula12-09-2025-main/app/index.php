<?php
$config = include('config.php');

$servername = $config['servername'];
$username   = $config['username'];
$password   = $config['password'];
$dbname     = $config['dbname'];

$dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Falha na conexão: " . $e->getMessage());
}

/* ===================================================
   INSERIR REGISTRO
   =================================================== */
if (isset($_POST['add'])) {
    $sql = "INSERT INTO Clientes (Nome, Endereco, Cidade, Telefone)
            VALUES (:nome, :endereco, :cidade, :telefone)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':nome'     => $_POST['nome'],
        ':endereco' => $_POST['endereco'],
        ':cidade'   => $_POST['cidade'],
        ':telefone' => $_POST['telefone']
    ]);
    header("Location: index.php");
    exit;
}

/* ===================================================
   ATUALIZAR REGISTRO
   =================================================== */
if (isset($_POST['update'])) {
    $sql = "UPDATE Clientes 
            SET Nome = :nome, Endereco = :endereco, Cidade = :cidade, Telefone = :telefone
            WHERE Id_Cliente = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':nome'     => $_POST['nome'],
        ':endereco' => $_POST['endereco'],
        ':cidade'   => $_POST['cidade'],
        ':telefone' => $_POST['telefone'],
        ':id'       => $_POST['id']
    ]);
    header("Location: index.php");
    exit;
}

/* ===================================================
   EXCLUIR REGISTRO
   =================================================== */
if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    $conn->query("DELETE FROM Clientes WHERE Id_Cliente = $id");
    header("Location: index.php");
    exit;
}

/* ===================================================
   BUSCAR REGISTROS
   =================================================== */
$clientes = $conn->query("SELECT * FROM Clientes ORDER BY Id_Cliente ASC")->fetchAll(PDO::FETCH_ASSOC);

/* ===================================================
   SE ESTIVER EDITANDO, CARREGAR O REGISTRO
   =================================================== */
$editando = null;
if (isset($_GET['edit'])) {
    $id = (int) $_GET['edit'];
    $stmt = $conn->prepare("SELECT * FROM Clientes WHERE Id_Cliente = :id");
    $stmt->execute([':id' => $id]);
    $editando = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Clientes</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        td, th { border: 1px solid #ccc; padding: 8px; }
        tr:nth-child(even) { background: #eee; }
        form { margin-top: 20px; }
        input { margin: 5px; padding: 8px; }
        .btn { padding: 8px 15px; cursor: pointer; }
    </style>
</head>
<body>

<h2><?= $editando ? "Editar Cliente" : "Adicionar Cliente"; ?></h2>

<form method="POST">
    <input type="text" name="nome" placeholder="Nome" required value="<?= $editando['Nome'] ?? '' ?>">
    <input type="text" name="endereco" placeholder="Endereço" required value="<?= $editando['Endereco'] ?? '' ?>">
    <input type="text" name="cidade" placeholder="Cidade" required value="<?= $editando['Cidade'] ?? '' ?>">
    <input type="text" name="telefone" placeholder="Telefone" required value="<?= $editando['Telefone'] ?? '' ?>">

    <?php if ($editando): ?>
        <input type="hidden" name="id" value="<?= $editando['Id_Cliente']; ?>">
        <button class="btn" type="submit" name="update">Salvar Alterações</button>
        <a href="index.php" class="btn">Cancelar</a>
    <?php else: ?>
        <button class="btn" type="submit" name="add">Adicionar</button>
    <?php endif; ?>
</form>

<h2>Lista de Clientes</h2>

<table>
<tr>
    <th>ID</th><th>Nome</th><th>Endereço</th><th>Cidade</th><th>Telefone</th><th>Ações</th>
</tr>

<?php foreach ($clientes as $c): ?>
<tr>
    <td><?= $c['Id_Cliente'] ?></td>
    <td><?= htmlspecialchars($c['Nome']) ?></td>
    <td><?= htmlspecialchars($c['Endereco']) ?></td>
    <td><?= htmlspecialchars($c['Cidade']) ?></td>
    <td><?= htmlspecialchars($c['Telefone']) ?></td>
    <td>
        <a href="?edit=<?= $c['Id_Cliente'] ?>">Editar</a> |
        <a href="?delete=<?= $c['Id_Cliente'] ?>" onclick="return confirm('Excluir este registro?');">Excluir</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

</body>
</html>
