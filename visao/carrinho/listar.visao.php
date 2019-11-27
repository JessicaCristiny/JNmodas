<div class="meio">
<h2> Listar Produtos Comprados</h2>

            
            <table border ="1">
                <div class="carrinho">
                <tr>
                    <th>NOME</th>
                    <th>DESCRICAO</th>
                    <th>VALOR</th> 
                    
                </tr>
            
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto['nome']?></td>
                <td><?=$produto['descricaoPRODUTO']?></td>
                <td><?=$produto['valor']?></td>
    
            </tr>
            <?php endforeach; ?>
            <a href="./carrinho/remover">Remover</a>
        </table>
            
                <h3>Resumo Pedido</h3>
                <h4>Subtotal: <?=$subtotal?></h4>
                <p><?=$quant?> Produtos</p>
            
            <button type="submit"><a href="./produto/listarProdutos">Comprar Mais produtos</a></button>   
            <button type="submit"><a href="./pedido/finalizarPedido">Comprar</a></button>   
</div>
</div>
