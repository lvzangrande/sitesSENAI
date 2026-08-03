<?php
require_once 'crud.php';

$dados_pessoais = readAll($pdo,'dados_pessoais');

foreach($dados_pessoais as $info_user){
    echo '';
};

        if (!empty($info_user['img_user']) && file_exists('./img/'. $info_user['img_user'])) {
    $foto = $info_user['img_user'];
        } else {
            $foto = 'foto_default.jpg';
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar foto</title>
</head>
<body>
    <a href="index.php">VOLTAR</a>
            <label>Foto de Perfil atual</label>

            <img src="./img/<?= $foto ?>" alt="foto de perfil">

            <input type="file" name="img_user"> 

            

            <button type="submit">
                Salvar Alterações
            </button>
</body>
</html>