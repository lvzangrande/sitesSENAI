<?php
require_once 'crud.php';
//select

//exibe uma tabela com os dados do banco
echo "<table border=1>
<tr>
<th>ID</th>
<th>Título</th>
</tr>";
    
$livros = readAll($pdo,'livros');
//print_r($livros);
foreach($livros as $livro){
    echo "<tr><td>ID: ".$livro['id']."</td><td>Título: ".$livro['titulo']."</td></tr>";
}

echo "<table>";

//consultar banco
$livro = read($pdo, 'livros',$_POST['livro']['id']);
if($livro){
    echo "<p>Mostrando".$_POST['livro']['titulo'].$_POST['livro']['capa']."2</p>";
}