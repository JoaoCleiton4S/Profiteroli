<?php
session_start();
include 'backend.php';

$produtos = getProdutos();

if (isset($_SESSION['mensagem'])) {
    echo '<p class="mensagem">' . $_SESSION['mensagem'] . '</p>';
    unset($_SESSION['mensagem']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Loja Online</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="styles.css">

</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ApenasUmBar Cardápio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href=".">Pratos Principais <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=".">Home</a>
            <li class="nav-item">
                <a class="nav-link" href=".">Acompanhamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=".">Bebidas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=".">Sobremesas</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="logi.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Carrinho.php">Carrinho</a>
            </li>
        </ul>
    </div>
</nav>
</header>

    <h1>Catálogo de Produtos</h1>

    <?php foreach ($produtos as $produto): ?>
        <div class="produto">
            <img src="<?= $produto['imagem']; ?>" alt="<?= $produto['nome']; ?>">
            <h3><?= $produto['nome']; ?></h3>
            <p><?= $produto['descricao']; ?></p>
            <p>Preço: R$<?= number_format($produto['preco'], 2); ?></p>
            <form action="adicionar_ao_carrinho.php" method="post">
                <input type="hidden" name="produto_id" value="<?= $produto['id']; ?>">
                <input type="number" name="quantidade" value="1" min="1">
                <button type="submit">Adicionar ao Carrinho</button>
            </form>
        </div>
    <?php endforeach; ?>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
