<?php
require_once 'crud.php';

$idLivro = 674;

$dadosAtualizados = [
    'titulo' => 'Dark Magic for Dummies',
    'isbn' => '9781118008188',
    'autor' => 'Rogertux',
    'preco' => 6767.67,
    'situacao' => 'Disponivel',
    'categoria' => 'Outros'
];

$linhasAfetadas = update($pdo,'livros',$dadosAtualizados, "id = $idLivro");

if($linhasAfetadas > 0) {
    echo 'Livro atualizado com sucesso!!!';
} else {
    echo 'Não doi possível atualizar o livro!!!';
}
?>