<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Carrinho de Compras</h1>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço Unitário</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            foreach ($carrinho as $item):
                $produto_nome = "Produto " . $item['produto_id'];
                $preco_unitario = 10.00;

                $subtotal = $preco_unitario * $item['quantidade'];
                $total += $subtotal;
            ?>
            <tr>
                <td><?= $produto_nome; ?></td>
                <td><?= $item['quantidade']; ?></td>
                <td>R$<?= number_format($preco_unitario, 2); ?></td>
                <td>R$<?= number_format($subtotal, 2); ?></td>
                <td>
                    <form action="remover_do_carrinho.php" method="post">
                        <input type="hidden" name="produto_id" value="<?= $item['produto_id']; ?>">
                        <button type="submit">Remover do Carrinho</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"><strong>Total:</strong></td>
                <td colspan="2"><strong>R$<?= number_format($total, 2); ?></strong></td>
            </tr>
        </tfoot>
    </table>

</body>
</html>
