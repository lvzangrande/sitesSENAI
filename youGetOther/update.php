<?php
require_once 'crud.php';

$idLivro = 674;

$dadosAtualizados = [
    'nome'          => $_POST['nome'],
    'tipo_carta'    => $_POST['tipo_carta'],
    'atributp'      => $_POST['atributo'],
    'nivel'         => $_POST['nivel'],
    'situacao'      => $_POST['situacao'],
    'categoria'     => $_POST['categoria'],
    'capa'          => ''//$_FILES['capa']
];

$linhasAfetadas = update($pdo,'livros',$dadosAtualizados, "id = $idLivro");

if($linhasAfetadas > 0) {
    echo 'Livro atualizado com sucesso!!!';
} else {
    echo 'Não doi possível atualizar o livro!!!';
}
?>