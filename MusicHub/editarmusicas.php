<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/editarmusicas.css">
    <title>Editar músicas</title>
</head>
<body>
    <?php 
    require_once './partials/header.php'; 
    require_once 'crud.php';

    $idMusica = $_GET['id'] ?? null;

    if (!$idMusica) {
        echo "<p class='msg-erro'>Erro: Nenhuma música selecionada para editar.</p>";
        exit;
    }

    if (isset($_POST['excluir'])) {
        $deleted = delete($pdo, 'musicas', "id_musica = $idMusica");

        if ($deleted) {
            echo "<script>alert('Música deletada com sucesso!'); window.location.href='vermusicas.php';</script>";
            exit;
        } else {
            echo '<p class="msg-erro">Erro ao deletar a música!!!</p>';
        }
    }

    if (isset($_POST['atualizar'])) {
        $dadosAtualizados = [
            'musica'   => $_POST['musica'], 
            'artista'  => $_POST['artista'],
            'segundos' => $_POST['segundos'],
            'genero'   => $_POST['genero']
        ];

        $linhasAfetadas = update($pdo, 'musicas', $dadosAtualizados, "id_musica = $idMusica");

        if ($linhasAfetadas > 0) {
            echo '<p class="msg-sucesso">Música atualizada com sucesso!!!</p>';
        }
    }

    $musicaAtual = read($pdo, 'musicas', "id_musica = $idMusica");
    ?>

    <a href="vermusicas.php" class="voltar">VOLTAR</a>
    <br>
    <div class="formulario">
        <label>Edite as informações da música:</label>
        
        <form action="editarmusicas.php?id=<?php echo $idMusica; ?>" method="POST">
            <input type="text" name="musica" value="<?php echo $musicaAtual['musica'] ?? ''; ?>" required>
            <input type="text" name="artista" value="<?php echo $musicaAtual['artista'] ?? ''; ?>" required>
            <input type="text" name="genero" value="<?php echo $musicaAtual['genero'] ?? ''; ?>" required>
            <input type="number" name="segundos" value="<?php echo $musicaAtual['segundos'] ?? ''; ?>" required>
            
            <div class="botoes-container">
                <button type="submit" name="atualizar" class="btn-salvar">Salvar Alterações</button>
                
                <button type="submit" name="excluir" class="btn-excluir" 
                        onclick="return confirm('Tem certeza que deseja excluir esta música?')">
                    Excluir Música
                </button>
            </div>
        </form>
    </div>
</body>
</html>