<?php
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$ids = array_column($_SESSION['produtos'],'id');
$index = array_search($id, $ids);
$produto = $_SESSION['produtos'][$index];

if($index !== false){
    $produto = $_SESSION['produtos'][$index];
}
else{
    header('Location: 404.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto detalhe</title>
</head>
<body>
    <?php
    
    ?>
</body>
</html>