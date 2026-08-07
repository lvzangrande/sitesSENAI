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
    <link rel="stylesheet" href="style.css">
    <title>Lucas Zangrande</title>
</head>
<body>
        <div class="editar"></div>
   <div class="content">
    <?php
        echo "<div class='main_info'>
                <div class='info_user'>"; 
        foreach($dados_pessoais as $info_user){
                echo "<a><b class='nome'>".$info_user['nome']."</b></a><br>
                <a>".$info_user['cargo']."</a><br><br>
                <a>".$info_user['resumo']."</a><br><br>
                <a>Grau de formação: ".$info_user['grau_formacao']."</a>"
                ;
        }
                echo "</div>";
        if (!empty($info_user['img_user']) && file_exists('./img/'. $info_user['img_user'])) {
    $foto = $info_user['img_user'];
        } else {
            $foto = 'foto_default.jpg';
        }

?>
        <div class="foto_perfil"><a href="editar_foto.php"><img src="./img/<?= $foto ?>" alt="foto de perfil" width="200"></a></div>
</div>

<?php
        echo "<div class='info'><h2>Contato</h2><hr>";

        foreach($contatos as $contato_user){
                echo "<a>Email: <b>".$contato_user['email']."</a></b><br><hr>
                <a>Telefone: <b>".$contato_user['telefone']."</a></b><br><hr>
                <a>Portifólio: <a id='P' href='".$contato_user['portifolio']."'><b>".$contato_user['portifolio']."</a></a></b><br><hr>"
                ;
        }
        echo '</div>
        <div class="line"></div>';

        echo "<div class='info'><h2>Experiências</h2><hr>";
        foreach($experiencias as $experiencia_user){//fazer uma verificação para caso um campo esteja vázio na pular uma linha
                echo "<b>".$experiencia_user['empresa']." - ".$experiencia_user['funcao']."</b><br>
                ".$experiencia_user['inicio']."<br>
                ".$experiencia_user['fim']."<br>
                ".$experiencia_user['descricao']."<br><hr>"
                ;
        }
        echo '</div>
        <div class="line"></div>';

        echo "<div class='info'><h2>Formação</h2><hr>";
        foreach($formacao as $formacao_user){
                echo "<b>".$formacao_user['instituicao']."</b><br>
                <b>".$formacao_user['nome_curso']."</b><br>
                ".$formacao_user['grau']."<br>
                ".$formacao_user['inicio']."<br>
                ".$formacao_user['conclusao']."<br><hr>"
                ;
        }
        echo '</div>';
?>
</div>
<footer>
        <a><strong>Desenvolvido por: Lucas Zangrande</strong></a>
</footer>
</body>
</html>