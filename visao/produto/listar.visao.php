<h2> Listar Produtos</h2>
        
        <table class =" table">
            <thead>
            <table border ="1">
                <tr>
                    <th>NOME</th>
                    <th>DESCRICAO</th>
                    <th>VALOR</th>
                    <th>Ver</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto['nome']?></td>
                <td><?=$produto['descricao']?></td>
                <td><?=$produto['valor']?></td>
                <td><a href ="./produto/ver/<?=$produto['idProduto']?>">Ver</a></td>
                <td><a href="./produto/deletar/<?=$produto['idProduto']?>">Deletar</a></td>
                
            </tr>
            <?php endforeach; ?>
        </table>
        </table>
        <a href ="./produto/adicionar" class ="btn btn-primary">Novo produto</a>



