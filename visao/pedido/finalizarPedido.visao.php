<div class="meio">
    <form action="./pedido/salvaPedido" method="POST">
        <table border ="1">
            <div class="carrinho">
                <tr>
                    <th>NOME</th>
                    <th>DESCRICAO</th>
                    <th>VALOR</th> 

                </tr>
                <?php foreach ($visaoProdutos as $visaoProduto): ?>
                    <tr>
                        <td><?= $visaoProduto['nome'] ?></td>
                        <td><?= $visaoProduto['descricaoPRODUTO'] ?></td>
                        <td><?= $visaoProduto['valor'] ?></td>

                    </tr>
                <?php endforeach; ?>

                <h4>Subtotal: <?= $subtotal ?></h4>
                <p><?= $quant ?> Produtos</p>
        </table>
        <select name="forma">
            <option value="default">Selecione uma Forma de Pagamento</option>
            <?php foreach ($formaPagamentos as $formaPagamento): ?>
                <option value="<?= $formaPagamento["idFormadePagamento"] ?>"><?= $formaPagamento["descricao"] ?></option>
            <?php endforeach; ?>
        </select>

        <select name="endereco">
            <option value="default">Selecione um endereço</option>
            <?php foreach ($enderecos as $endereco): ?>
                <option value="<?= $endereco["idendereco"] ?>"><?= $endereco["rua"] ?></option>
            <?php endforeach; ?>
        </select>



        <button type="submit">Salvar Pedido</button>
        <button type="submit"><a href="./pedido/listarpedidos" class="btn btn-primary">Listar Pedido</a></button>

    </form>

    <form method="POST" action="">

        Nome do Cupom: <input type="text" name="nomecupom" value="<?= @$cupom['nomecupom'] ?>"><br>
        <button type="submit">Aplicar Desconto</button>
    </form>
</div>
