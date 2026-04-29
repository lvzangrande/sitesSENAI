<?php
require_once 'crud.php';

//puxa dados do formulário
$novoLivro = [
    'titulo' => 'PHP for Dummies',
    'isbn' => '9781118008188',
    'autor' => 'John Doe',
    'preco' => 299.99,
    'situacao' => 'Disponivel',
    'categoria' => 'Informática',
];

$idLivroNovo = create($pdo, 'livros',$novoLivro);
echo 'novo livro inserido com um ID: '.$idLivroNovo;