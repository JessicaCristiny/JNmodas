
<h1>Lista Produtos por Quantidade de Estoque</h1>
<table border = "1">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade no estoque</th>
                </tr>
            </thead>
<?php foreach ($quantidades as $quantidade): ?>
            <tr>
                <td><?=$quantidade["nome"]?></td>
                <td><?=$quantidade["estoqueMaximo"]?></td>
           
            </tr>
<?php endforeach; ?>
</TABLE>