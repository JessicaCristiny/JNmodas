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
                <td><?=$produto?></td>
                <td><?=$produto['nome produto']?></td>
                <td><?=$produto['tamanho']?></td>
                <td><a href ="./produto/ver/<?=$produto['id']?>">Ver</a></td>
                <td><a href="./produto/deletar/<?=$produto['id']?>"Deletar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
<a href =./produto/adicionar" class =" btn btn-primary">Novo produto</a>



