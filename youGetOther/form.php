<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Adicionar cartas</title>
</head>
<body>
    <div class="form">
        <form action="insert.php" method="POST" required enctype="multipart/form-data">
            <input type="text" placeholder="Nome da carta" name="nome" required>
            
            <select name="tipo_carta" required>
                <option>Selecione o tipo de carta</option>
                <option>MONSTRO</option>
                <option>MÁGIA</option>
                <option>ARMADILHA</option>
                <option>FUSÃO</option>
            </select>
            <input type="number" name="nivel">
            
            <select name="atributo" required>
                <option>Selecione o atributo</option>
                <option>MAGIA</option>
                <option>ARMADILHA</option>
                <option>LUZ</option>
                <option>TREVAS</option>
                <option>FOGO</option>
                <option>ÁGUA</option>
                <option>VENTO</option>
                <option>TERRA</option>
                <option>DIVINDADE</option>
            </select>

            <input type="text" placeholder="Descrição da carta" name="descricao" required>
            <input type="text" placeholder="Subtipo da carta" name="subtipo">
            <input type="file" accept="image/*" name="img" required>
            <button type="submit">Adicionar Carta</button>
        </form>
    </div>
</body>
</html>