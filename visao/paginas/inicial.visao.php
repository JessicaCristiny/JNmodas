<h1>J & N Modas</h1>

<P> Nossaa loja apresenta para vocês roupas estilosas que estão super na moda, para você abalar em seus looks e ainda sentir-se super confortável com nossas roupas.</P>
<table class =" table">
    <thead>
        <tr> 
            <th>ID</th>
            <th>NOME PRODUTO</th>
            <th>TAMANHO</th>
            <th>DESCRICAO</th>
            <th>PRECO</th>
            <th>QUANTIDADE</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?= $produto ['id'] ?></td>
            <td><?= $produto['nome produto'] ?></td>
            <td><?= $produto['tamanho'] ?></td>
        </tr>
    
    <?php endforeach; ?>
  
</table>