<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/vermusicas.css">
    <title>Visualizar músicas</title>
</head>
<?php
    require_once './partials/header.php';
?>
<a href="index.php" class="voltar">VOLTAR</a>
<body>
<div class="tabela">
    <table>
        <tr>
            <th>Nome da música</th>
            <th>Artista</th>
            <th>Duração</th>
            <th>Gênero</th>
            <th>Editar</th>
        </tr>
<?php 
    require_once 'crud.php';

    $musicas = readAll($pdo,'musicas');
//print_r($musicas);
foreach($musicas as $musica){
    echo "<tr>
            <td>".$musica['musica']."</td>
            <td>".$musica['artista']."</td>
            <td>".$musica['segundos']."</td>
            <td>".$musica['genero']."</td>
            <td><a href='editarmusicas.php?id=".$musica['id_musica']."'><img src='https://cdn-icons-png.flaticon.com/512/5996/5996831.png' width=18px></a></td>
          </tr>";
}
?>
    </table>
</div>
</body>
</html>