
<h2> Listar Produtos</h2>
        
        <table border ="1">
            <thead>
            <table border ="1" class="carrinho">
                <tr>
                    <th>NOME</th>
                    <th>DESCRICAO</th>
                    <th>VALOR</th> 
                    
                </tr>
            </thead>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto['nome']?></td>
                <td><?=$produto['descricao']?></td>
                <td><?=$produto['valor']?></td>
    
            </tr>
            <?php endforeach; ?>
            <a href="./carrinho/remover">Remover</a>
        </table>
            <div id="total">
                <h3>Resumo Pedido</h3>
                <h4>Subtotal: <?=$subtotal?></h4>
                <p><?=$quant?> Produtos</p>
            </div>
            <button type="submit"><a href="./produto/listarProdutos">Comprar Mais produtos</a></button>   
       

