<?php

session_start();

$_SESSION['carrinho'][] = [
    'produto_id' => $produto_id,
    'quantidade' => $quantidade,
];

setcookie('carrinho', json_encode($carrinho), time() + 3600, '/');

$stmt = $pdo->prepare('INSERT INTO carrinho (usuario_id, produto_id, quantidade) VALUES (?, ?, ?)');
$stmt->execute([$usuario_id, $produto_id, $quantidade]);

foreach ($_SESSION['carrinho'] as &$item) {
    if ($item['produto_id'] == $produto_id) {
        $item['quantidade'] = $nova_quantidade;
        break;
    }
}

