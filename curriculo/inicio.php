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
    echo '<hr>';
    foreach($contatos as $contato_user){
            echo "<b>".$contato_user['email']."<b><br>
            <b>".$contato_user['telefone']."<b><br>
            <b>".$contato_user['portifolio']."<b><br>"
            ;
    }
    echo '<hr>';
    ?>
</body>
</html>