<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/addmusica.css">
    <title>Adicionar músicas</title>
</head>
<body>
    <?php require_once './partials/header.php'; ?>

    <a href="index.php" class="voltar">VOLTAR</a>
    <br>
    <div class="formulario">
        <label>Insira as informações da música:</label>
        <form action="addmusica.php" method="POST">
            <input type="text" placeholder="Nome da música" name="musica" required>
            <input type="text" placeholder="Nome do artista" name="artista" required>
            <input type="text" placeholder="Gênero da música" name="genero" required>
            <input type="number" placeholder="Duração em segundos" name="segundos" required>
            <button type="submit">Adicionar</button>
        </form>

        <?php
        require_once 'crud.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {            
            $novaMusica = [
                'musica'   => $_POST['musica'] ?? '',
                'artista'  => $_POST['artista'] ?? '', 
                'segundos' => $_POST['segundos'] ?? '',
                'genero'   => $_POST['genero'] ?? ''
            ];

            $idMusicaNova = create($pdo, 'musicas', $novaMusica); 
            
            if ($idMusicaNova) {
                echo '<p style="color: green;">Nova música inserida com o ID: ' . $idMusicaNova . '</p>';
            }
        }
        ?>
    </div>
</body>
</html>