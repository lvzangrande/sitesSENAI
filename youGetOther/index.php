<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="css.css">
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

<?php
require_once 'crud.php';
//select

//exibe uma tabela com os dados do banco
echo "<table>
<tr>
<th>ID</th>
<th>Título</th>
<th>Tipo de carta:</th>
<th>Ilustração:</th>
<th>Descrição:</th>
<th>Atributo:</th>
<th>Nível:</th>
<th>ATK:</th>
<th>DEF:</th>
</tr>";
    
$tablecartas = readAll($pdo,'cartas');
//print_r($livros);
foreach($tablecartas as $carta){

    echo "<tr>
            <td>".$carta['id']."</td>
            <td>".$carta['nome']."</td>
            <td>".$carta['tipo_carta']."</td>
            <td><img src='".$carta['img']."' width='150'></td>
            <td>".$carta['descricao']."</td>
            <td>".$carta['atributo']."</td>";
    if ($carta['tipo_carta'] == "MONSTRO" || $carta['tipo_carta'] == "FUSÃO"){
        echo "<td>".$carta['nivel']."</td><td>".$carta['atk']."</td><td>".$carta['def']."</td>";
    }
    echo "</tr>";
}

echo "<table>";

//consultar banco
/*$carta = read($pdo, 'carta',$_POST['carta']['id']);
if($carta){
    echo "<p>Mostrando".$_POST['carta']['nome'].$_POST['carta']['img']."2</p>";
}*/
?>
</body>
</html>