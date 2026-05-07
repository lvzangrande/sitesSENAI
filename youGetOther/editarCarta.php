<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Carta</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<header>
    <nav>
        <a href="index.php">Página inicial</a>
        <a href="excluirCarta.php">Excluir carta</a>
        <img src="./img/logo.png" width="150">
        <a href="adicionarCarta.php">Nova carta</a>
        <a href="editarCarta.php">Editar carta</a>
    </nav>
</header>

<div class="form">
    <?php
    require_once 'crud.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $carta = read($pdo, 'cartas', "id = $id");
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idCarta = $_POST['id'];
        
        $dadosAtualizados = [
            'nome'       => $_POST['nome'],
            'tipo_carta' => $_POST['tipo_carta'],
            'atributo'   => $_POST['atributo'],
            'nivel'      => !empty($_POST['nivel']) ? $_POST['nivel'] : null,
            'descricao'  => $_POST['descricao'],
            'subtipo'    => $_POST['subtipo'],
            'atk'        => !empty($_POST['atk']) ? $_POST['atk'] : null,
            'def'        => !empty($_POST['def']) ? $_POST['def'] : null
        ];

        $linhasAfetadas = update($pdo, 'cartas', $dadosAtualizados, "id = $idCarta");

        if ($linhasAfetadas > 0) {
            echo '<script>alert("Carta atualizada com sucesso!!!"); window.location.href="index.php";</script>';
        } else {
            echo '<script>alert("Nenhuma alteração foi feita ou erro ao atualizar!");</script>';
        }
    }
    ?>

    <?php if (isset($carta)): ?>
        <form action="editarCarta.php" method="POST">
            <input type="hidden" name="id" value="<?= $carta['id'] ?>">
            
            <label>Nome:</label>
            <input type="text" name="nome" value="<?= $carta['nome'] ?>" required>
            
            <label>Tipo:</label>
            <select name="tipo_carta" required>
                <option value="MONSTRO" <?= $carta['tipo_carta'] == 'MONSTRO' ? 'selected' : '' ?>>MONSTRO</option>
                <option value="MAGIA" <?= $carta['tipo_carta'] == 'MAGIA' ? 'selected' : '' ?>>MAGIA</option>
                <option value="ARMADILHA" <?= $carta['tipo_carta'] == 'ARMADILHA' ? 'selected' : '' ?>>ARMADILHA</option>
                <option value="FUSÃO" <?= $carta['tipo_carta'] == 'FUSÃO' ? 'selected' : '' ?>>FUSÃO</option>
            </select>

            <label>Atributo:</label>
            <select name="atributo" required>
                <?php 
                $atributos = ['MAGIA', 'ARMADILHA', 'LUZ', 'TREVAS', 'FOGO', 'ÁGUA', 'VENTO', 'TERRA', 'DIVINDADE'];
                foreach ($atributos as $atrib): ?>
                    <option value="<?= $atrib ?>" <?= $carta['atributo'] == $atrib ? 'selected' : '' ?>><?= $atrib ?></option>
                <?php endforeach; ?>
            </select>

            <label>Nível:</label>
            <input type="number" name="nivel" value="<?= $carta['nivel'] ?>">

            <label>Descrição:</label>
            <input type="text" name="descricao" required placeholder="<?= $carta['descricao'] ?>">

            <label>Subtipo:</label>
            <input type="text" name="subtipo" value="<?= $carta['subtipo'] ?>">

            <label>ATK:</label>
            <input type="number" name="atk" value="<?= $carta['atk'] ?>">

            <label>DEF:</label>
            <input type="number" name="def" value="<?= $carta['def'] ?>">

            <button type="submit">Salvar Alterações</button>
        </form>
    <?php else: ?>
        <form action="editarCarta.php" method="GET">
            <input type="number" placeholder="Digite o ID da carta para editar" name="id" required>
            <button type="submit">Buscar Carta</button>
        </form>
    <?php endif; ?>
</div>
</body>
</html>