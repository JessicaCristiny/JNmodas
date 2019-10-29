<div class="meio">
    <form action="" method="POST">
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
                        <td><?= $visaoProduto['descricao'] ?></td>
                        <td><?= $visaoProduto['valor'] ?></td>

                    </tr>
                <?php endforeach; ?>
                    
                <h4>Subtotal: <?=$subtotal?></h4>
                <p><?=$quant?> Produtos</p>
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

        Nome do Cupom: <input type="text" name="nomecupom" value="<?= @$cupom['nomecupom'] ?>"><br>
        <button type="submit">Aplicar Desconto</button>   

        <button type="submit" class="signupbtn">Finalizar Pedido</button> 
        <a href="./pedido/listar" class="btn btn-primary">Listar Pedido</a>  

    </form>
</div>
