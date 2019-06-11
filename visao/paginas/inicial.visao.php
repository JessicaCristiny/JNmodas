<h1>J & N Modas</h1>

<P> Nossa loja é sobre a venda de roupas estilosas para vocês!</P>
<table BORDER ="1">
    <thead>
        <tr> 
            <th>NOME</th>
            <th>DESCRICAO</th>
            <th>VALOR</th>

        </tr>

    </thead>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?= $produto ['idProduto'] ?></td>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['valor'] ?></td>
        </tr>
    
    <?php endforeach; ?>
  
</table>
