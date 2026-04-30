<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/addmusica.css">
    <title>Adicionar músicas</title>
</head>
    <?php
     require_once './partials/header.php';
    ?>
<body>
    <a href="index.php" class="voltar">VOLTAR<a>
    <br>
    <div class="formulario">
        <label>Insira as informações da música:</label>
            <form action="" method="POST">
                <input type="text" placeholder="Nome da música" name="musica">
                <input type="text" placeholder="Nome do artista" name="artista">
                <input type="text" placeholder="Gênero da música" name="genero">
                <button type="submit">Adicionar</button>
            </form>


</body>
</html>