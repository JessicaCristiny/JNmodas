
<h1>Lista Produtos por Quantidade de Estoque</h1>
<table border = "1">
            <thead>
                <tr>
                    <th>idPedido</th>
                    <th>Cidade</th>
                    <th>Total</th>
                </tr>
            </thead>
<?php foreach ($quantidades as $quantidade): ?>
            <tr>
                <td><?=$quantidade["idPedido"]?></td>
                <td><?=$quantidade["cidade"]?></td>
                <td><?=$quantidade["total"]?></td>
           
            </tr>
<?php endforeach; ?>

