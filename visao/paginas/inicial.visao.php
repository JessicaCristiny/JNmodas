<h1>J & N Modas</h1>

<P> Nossa loja apresenta roupas estilosas para você arrasar no seu look</P>
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
