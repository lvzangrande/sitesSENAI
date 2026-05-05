<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Formulário</title>
</head>
<body>
    <div class="form">
        <form action="insert.php" method="POST" required enctype="multipart/form-data">
            <input type="text" placeholder="Titulo" name="titulo" required>
            <input type="text" placeholder="ISBN" name="isbn" required>
            <input type="text" placeholder="autor" name="autor" required>
            <input type="number" placeholder="Preço" step=0.01 name="preco" required>
            <select name="situacao" required>
                <option>Selecione uma opção</option>
                <option>Disponível</option>
                <option>Indisponível</option>
            </select>
            <input type="text" placeholder="Categoria" name="categoria" required>
            <input type="file" accept="image/*" name="arquivo" required>
            <button type="submit">Inserir livro</button>
        </form>
    </div>
</body>
</html>