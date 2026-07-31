<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Cadastro de Produto</h1>

    <form action="data.php" method="POST">
        <label>Nome do Produto</label>
        <input type="text" name="nome" required>

        <label>Preço</label>
        <input type="number" step="0.01" name="preco" required>

        <label>Categoria</label>
        <select name="categoria">
            <option value="periferico">Periférico</option>
            <option value="hardware">Hardware</option>
        </select>

        <label>Descrição do produto</label>
        <input type="text" name="descricao" required>

        <label>Imagem do produto</label>
        <input type="text" name="descricao" required>
    <?php
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];
        $imagem = $_POST['imagem']

        // Simulação de salvar (pode trocar por banco depois)
        echo "<h2>Produto cadastrado com sucesso!</h2>";
        echo "Nome: $nome <br>";
        echo "Preço: R$ $preco <br>";
        echo "Categoria: $categoria <br>";
        echo "Descrição: $descricao <br>";
    ?>
        <label>Descrição</label>
        <textarea name="descricao"></textarea>

        <button type="submit">Cadastrar</button>
    </form>
</div>

</body>
</html>