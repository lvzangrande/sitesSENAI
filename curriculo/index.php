<?php
require_once 'crud.php';

$dados_pessoais = readAll($pdo,'dados_pessoais');
$contatos = readAll($pdo,'contatos');
$experiencias = readAll($pdo,'experiencias');
$formacao = readAll($pdo,'formacao');

/*$user =[
    $dados_pessoais[''];
    $dados_pessoais[''];
    
];*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas Zangrande</title>
</head>
<body>
   
    <?php
        foreach($dados_pessoais as $info_user){
                echo "<b>".$info_user['nome']."<b><br>
                <b>".$info_user['cargo']."<b><br>
                <b>".$info_user['resumo']."<b><br>
                <b>".$info_user['grau_formacao']."<b><br>"
                ;
        }
        if (!empty($info_user['img_user']) && file_exists('./img/'. $info_user['img_user'])) {
    $foto = $info_user['img_user'];
        } else {
            $foto = 'foto_default.jpg';
        }
?>
 <a href="editar_foto.php"><img src="./img/<?= $foto ?>" alt="foto de perfil"></a><br>
<?php
        echo '<hr>';

        foreach($contatos as $contato_user){
                echo "<b>".$contato_user['email']."<b><br>
                <b>".$contato_user['telefone']."<b><br>
                <b>".$contato_user['portifolio']."<b><br>"
                ;
        }
        echo '<hr>';

        foreach($experiencias as $experiencia_user){
                echo "<b>".$experiencia_user['empresa']."<b><br>
                <b>".$experiencia_user['funcao']."<b><br>
                <b>".$experiencia_user['inicio']."<b><br>
                <b>".$experiencia_user['fim']."<b><br>
                <b>".$experiencia_user['descricao']."<b><br>"
                ;
        }
        echo '<hr>';

        foreach($formacao as $formacao_user){
                echo "<b>".$formacao_user['instituicao']."<b><br>
                <b>".$formacao_user['nome_curso']."<b><br>
                <b>".$formacao_user['grau']."<b><br>
                <b>".$formacao_user['inicio']."<b><br>
                <b>".$formacao_user['conclusao']."<b><br>"
                ;
        }
        echo '<hr>';
?>
</body>
</html>