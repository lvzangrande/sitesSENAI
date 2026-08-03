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
<?php
    if (isset($_FILES['img_user']) && $_FILES['img_user']['error'] === UPLOAD_ERR_OK) {
        $nome_foto = $_FILES['img_user']['name'];
        
        if (move_uploaded_file($_FILES['img_user']['tmp_name'], "../img/uploads/usuarios/clientes/" . $nome_foto)) {
            $dadosAtualizados['img_user'] = $nome_foto;
        }
    }

    $linhasAfetadas = update($pdo, 'dados_pessoais', "img_user = $idUser");

    if ($linhasAfetadas > 0) {
        echo '<script>alert("Usuário atualizado com sucesso!!!"); window.location.href="userpage.php";</script>';
        exit();
    } else {
        echo '<script>alert("Nenhuma alteração foi feita ou erro ao atualizar!");</script>';
    }
?>
</body>
</html>