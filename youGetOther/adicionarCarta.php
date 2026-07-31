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
    <div class="form">

        <form action="adicionarCarta.php" method="POST" required enctype="multipart/form-data">
            <input type="text" placeholder="Nome da carta" name="nome" required>
            
            <select name="tipo_carta" required>
                <option>Selecione o tipo de carta</option>
                <option>MONSTRO</option>
                <option>MÁGIA</option>
                <option>ARMADILHA</option>
                <option>FUSÃO</option>
            </select>

            <input type="number" placeholder="Nível do monstro" name="nivel" min="1" max="12">

            <select name="atributo" required>
                <option>Selecione o atributo</option>
                <option>MAGIA</option>
                <option>ARMADILHA</option>
                <option>LUZ</option>
                <option>TREVAS</option>
                <option>FOGO</option>
                <option>ÁGUA</option>
                <option>VENTO</option>
                <option>TERRA</option>
                <option>DIVINDADE</option>
            </select>

            <input type="text" placeholder="Descrição da carta" name="descricao" required>
            <input type="text" placeholder="Subtipo da carta" name="subtipo">
            
            <input type="file" accept="image/*" name="img" required>

            <input type="number" placeholder="Ataque do monstro" name="atk">
            <input type="number" placeholder="Defesa do monstro" name="def">

            <button type="submit">Adicionar Carta</button>
        </form>
    </div>
<?php
require_once 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $novaCarta = [
        'nome'       => $_POST['nome'],
        'tipo_carta' => $_POST['tipo_carta'],
        'atributo'   => $_POST['atributo'],
        'descricao'  => $_POST['descricao'],
        'subtipo'    => $_POST['subtipo'],
        'nivel'      => !empty($_POST['nivel']) ? $_POST['nivel'] : null,
        'atk'        => !empty($_POST['atk']) ? $_POST['atk'] : null,
        'def'        => !empty($_POST['def']) ? $_POST['def'] : null,
        'img'        => '' 
    ];

    $idCartaNova = create($pdo, 'cartas', $novaCarta);

    $tipos_permitidos = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif']; 

    if(!in_array($_FILES['img']['type'], $tipos_permitidos)){
        echo "Apenas arquivos .jpg, .jpeg, .png ou .gif";
        exit;
    }

    $tamanho_max = 1 * 1024 * 1024; 

    if($_FILES['img']['size'] > $tamanho_max){
        echo "A imagem é muito grande. Máximo de 1MB.";
        exit;
    }

    $extensao = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
    $novonome = "img_".uniqid().".".$extensao;

    $dir = "img/";
    $caminho = $dir."$idCartaNova/";
    $file = $caminho.$novonome;

    if(!is_dir($caminho)){
        mkdir($caminho, 0755, true); 
    }

    if (move_uploaded_file($_FILES['img']['tmp_name'], $file)){
        $capaUrl = $file;
        update($pdo, 'cartas', ['img' => $capaUrl], "id = $idCartaNova");
        
        echo "<p style='color: green;'>Nova carta adicionada com sucesso! ID: $idCartaNova</p>";
        echo "<a href='index.php'>Ver Cartas</a>";
    } else {
        echo "<p style='color: red;'>Erro ao enviar a imagem da carta.</p>";
    }
}
?>
</body>
</html>