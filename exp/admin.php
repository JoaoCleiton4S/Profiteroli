<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração do Cardápio - Restaurante</title>
   
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
                <a class="nav-link" href="PratosPrincipais.php">Pratos Principais <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            <li class="nav-item">
                <a class="nav-link" href="Acompanhamentos.php">Acompanhamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Bebidas.php">Bebidas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Sobremesas.php">Sobremesas</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="LOGI.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Carrinho.php">Carrinho</a>
            </li>
        </ul>
    </div>
</nav>
</header>

<h2><br>Administração do Cardápio<br></h2>
<p><br> Aqui você pode alterar o cardápio do restaurante.<br></p>

<br>
<a href="logout.php">Sair</a>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer><br>Olá admin</footer>
</body>
</html>
