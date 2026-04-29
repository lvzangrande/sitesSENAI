<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebido</title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $pais = $_POST['pais'];
    $turno = $_POST['turno'];

    echo "Bem vindo $nome";
    echo "$endereco";
    echo "$email";
    echo "Você é de $pais";
    echo "Seu turno é $turno";
    ?>
</body>
</html>