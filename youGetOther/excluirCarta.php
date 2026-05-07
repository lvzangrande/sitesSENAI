<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css.css">
    <title>Adicionar cartas</title>
</head>
<body>

<header>
    <nav>
        <a href="index.php">Página incial</a>
        <a href="excluirCarta.php">Excluir carta</a>
        <img src="./img/logo.png" width="150">
        <a href="adicionarCarta.php">Nova carta</a>
        <a href="editarCarta.php">Editar carta</a>
    </nav>
</header>

<form action="excluirCarta.php" method="POST">
    <input type="number" placeholder="Id da carta" name="id_excluir" required>
    <button type="submit">Excluir Carta</button>
</form>

<?php
require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id_excluir'])) {
    $idCarta = $_POST['id_excluir'];

    $deleted = delete($pdo, 'cartas', 'id = ' . $idCarta);

    if ($deleted) {
        echo '<p style="color: green;">Carta deletada com sucesso!</p>';
    } else {
        echo '<p style="color: red;">Erro ao deletar: Verifique se o ID existe.</p>';
    }
}
?>
</body>
</html>