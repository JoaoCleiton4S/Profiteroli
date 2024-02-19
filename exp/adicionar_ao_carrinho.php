<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produto_id']) && isset($_POST['quantidade'])) {
    $produto_id = $_POST['produto_id'];
    $quantidade = $_POST['quantidade'];

    if (isset($_SESSION['carrinho'][$produto_id])) {
        $_SESSION['carrinho'][$produto_id]['quantidade'] += $quantidade;
    } else {
        $_SESSION['carrinho'][$produto_id] = ['quantidade' => $quantidade];
    }

    $_SESSION['mensagem'] = 'Produto adicionado ao carrinho com sucesso!';
    $_SESSION['produto_adicionado'] = $produto_id;
}

header('Location: index.php');
?>
