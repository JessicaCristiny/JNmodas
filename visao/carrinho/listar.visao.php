
<h2> Listar Produtos</h2>
        
        <table border ="1">
            <thead>
            <table border ="1">
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
        </table>
        </table>
       

