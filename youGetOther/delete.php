<?php
require_once 'crud.php';

$idlivro = 674;

$deleted = delete($pdo, 'livros','id = '.$idlivro);

if($deleted){
    echo 'Livro deletado com sucesso';
} else {
    echo 'Erro ao deletar';
}
?>