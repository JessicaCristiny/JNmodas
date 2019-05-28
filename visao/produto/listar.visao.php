<h2> Listar Produtos</h2>
        
        <table class =" table">
            <thead>
                <tr>
                    <th>NOME PRODUTO</th>
                    <th>TAMANHO</th>
                    <th>DESCRICAO</th>
                    <th>PRECO</th>
                    <th>QUANTIDADE</th>
                </tr>
            </thead>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto ['id']?></td>
                <td><?=$produto['nome produto']?></td>
                <td><?=$produto['tamanho']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a cadastrar = "./produto/adicionar" class =" btn btn-primary">Novo produto</a>



