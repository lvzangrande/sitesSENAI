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
<body>
<div class="tabela">
    <table>
        <tr>
            <th>Nome da música</th>
            <th>Artista</th>
            <th>Duração</th>
            <th>Gênero<th>
        </tr>
<?php 
    require_once 'crud.php';

    $musicas = readAll($pdo,'musicas');
//print_r($musicas);
foreach($musicas as $musica){
    echo "<tr><td>".$musica['musica']."</td>
    <td>".$musica['artista']."</td>
    <td>".$musica['segundos']."</td>
    <td>".$musica['genero']."</td></tr>";
}
?>
    </table>
</div>
</body>
</html>