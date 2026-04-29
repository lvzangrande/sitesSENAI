<?php
include 'data.php';
// print "<pre>";
// print_r($produtos_base);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Store</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<header>
    <h1>⚡ Gamer Store</h1>
    <p>Setup dos sonhos começa aqui</p>
</header>

<section class="hero">
    <h2>Monte seu Setup Gamer 🔥</h2>
    <p>Produtos com qualidade profissional e preço justo</p>
    <a href='addproduto.php'><button>Adicionar produto</button></a>
</section>

<ul>
<?php
foreach($categorias as $keycat => $valuecat){
    echo '<li><a href="index.php?categoria='.$keycat.'">'.$valuecat.'</a></li>';
}
?>
</ul>

<section class="produtos">
<?php
$categoriaSelecionada = isset($_GET['categoria']) ? $_GET['categoria'] : '';

foreach ($produtos_base as $produto){

    if ($categoriaSelecionada == '' || $produto['categoria'] == $categoriaSelecionada){

        print '<div class="card">
            <img src="'.$produto['imagem'].'">
            <div class="card-content">
                <h3>'. $produto['nome'] .'</h3>
                <p class="preco">R$ '.$produto['preco'].'</p>
                <a href="detalheproduto.php?id='.$produto['id'].'" class="btn">Detalhes</a>
            </div>
        </div>';

    }
}
?>
</section>
<!--</section>
    </section>
<section class="produtos">
    <h2 class="titulo-secao">💻 Hardware</h2>

    <div class="grid">

        <div class="card">
            <img src="data:image/jpeg;base64,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">
            <div class="card-content">
                <h3>Placa de Vídeo GTX</h3>
                <p class="descricao">
                    Alto desempenho para rodar jogos em qualidade máxima.
                </p>
                <p class="preco">R$ 1.299,90</p>
                <a href="#" class="btn">Comprar</a>
            </div>
        </div>

        <div class="card">
            <img src="data:image/jpeg;base64,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">
            <div class="card-content">
                <h3>Memória RAM 16GB</h3>
                <p class="descricao">
                    Mais velocidade e desempenho para multitarefas e jogos.
                </p>
                <p class="preco">R$ 349,90</p>
                <a href="#" class="btn">Comprar</a>
            </div>
        </div>

        <div class="card">
            <img src="https://static.wixstatic.com/media/615872_d150ca6ac5164b9aa866b8130c7902a0~mv2.png/v1/fill/w_300,h_300,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/PRO5000.png">
            <div class="card-content">
                <h3>SSD 1TB NVMe</h3>
                <p class="descricao">
                    Carregamentos ultra rápidos e maior desempenho geral.
                </p>
                <p class="preco">R$ 499,90</p>
                <a href="#" class="btn">Comprar</a>
            </div>
        </div>
</form>-->

<section class="contato">
    <h2>📩 Fale com a gente</h2>

    <form>
        <input type="text" placeholder="Seu nome" required>
        <input type="email" placeholder="Seu email" required>
        <textarea rows="4" placeholder="Mensagem"></textarea>
        <button type="submit">Enviar</button>
    </form>
</section>

<footer>
    <p>© 2026 Gamer Store | Todos os direitos reservados</p>
</footer>
</body>
</html>