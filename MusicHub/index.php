<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>MusicHub</title>
</head>
<body>
    <?php
    require_once './partials/header.php';
    ?>
    <h1>Bem vindo!</h1> <!--Saudação personalizada-->
    <h2>O que você quer fazer?</h2>

    <div class="container">

        <div class="card">
            <div class="title_card">
                <p>VISUALIZAR MÚSICAS<p>
            </div>
            <a href=""><!--Não esquece de linkar-->
                <img src="https://www.svgrepo.com/show/282865/musical-note-music.svg" width=300px>
            </a>
        </div>

        <div class="card">
            <div class="title_card">
                <p>ADICIONAR MÚSICAS<p>
            </div>
            <a href="addmusica.php"><!--Não esquece de linkar-->
                <img src="https://cdn-icons-png.flaticon.com/512/1286/1286915.png" width="300px">
            </a>
        </div>
    </div><!--fecha container-->
</body>
</html>