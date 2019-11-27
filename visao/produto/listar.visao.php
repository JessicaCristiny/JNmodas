<div class="meio">
<h2> Listar Produtos</h2>
            <table border ="1">
                <tr>
                    <th>NOME</th>
                    <th>DESCRICAO</th>
                    <th>VALOR</th>
                    <th>Ver</th>
                    <th>Deletar</th>
                    <th>EDITAR</TH>
                </tr>
            </thead>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto['nome']?></td>
                <td><?=$produto['descricao']?></td>
                <td><?=$produto['valor']?></td>
                <td><a href ="./produto/ver/<?=$produto['idProduto']?>">Ver</a></td>
                <td><a href="./produto/deletar/<?=$produto['idProduto']?>">Deletar</a></td>
                <td><a href="./produto/editar/<?=$produto['idProduto']?>">Editar</a></td>
              
            </tr>
            <?php endforeach; ?>
        </table>
        </table>
        <a href ="./produto/adicionar" class ="btn btn-primary">Novo produto</a>
</div>


