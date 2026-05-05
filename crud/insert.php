<?php
require_once 'crud.php';

//puxa dados do formulário
$novoLivro = [
    'titulo'    => $_POST['titulo'],
    'isbn'      => $_POST['isbn'],
    'autor'     => $_POST['autor'],
    'preco'     => $_POST['preco'],
    'situacao'  => $_POST['situacao'],
    'categoria' => $_POST['categoria'],
    'capa'      => ''//$_FILES['capa']
];

$idLivroNovo = create($pdo, 'livros',$novoLivro);//cria novo livro

$tipos_permitdos = ['image/jpg','image/png','image/gif'];//verifica extensão do arquivo

if(!in_array($_FILES['arquivo']['type'],$tipos_permitdos)){
    echo "Apenas arquivo .jpg ou .png";
    exit;
}

$tamanho_max = 1 * 1024 * 1024;

if($_FILES['arquivo']['size'] > $tamanho_max){
    exit;
    };
$extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

$novonome = "capa_".uniqid().".".$extensao;

$dir = "uploads/";
$caminho = $dir."$idLivroNovo/";
$file = $caminho.$novonome;

if(!is_dir($caminho)){
    mkdir($caminho,0755);
}

if (move_uploaded_file($_FILES['arquivo']['tmp_name'],$file)){
    $capaUrl = $file;
    update($pdo,'livros', ['capa' => $capaUrl],"id = $idLivroNovo");
    echo "Livro inserido com sucesso! ID: $idLivroNovo";
    echo "<a href='select.php?id=$idLivroNovo'>Ver Livro</a>";
} else {
    echo "Erro ao enviar a imagem da capa";
}
//echo 'novo livro inserido com um ID: '.$idLivroNovo;