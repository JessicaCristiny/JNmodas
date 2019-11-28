<div class="meio">

<table border = "1">
    <h1>Lista por Categorias</h1>
            <thead>
                <tr>
                    <th>idPedido</th>
                    <th>Categoria</th>
                    <th>Total</th>
                </tr>
            </thead>
<?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?=$categoria["idPedido"]?></td>
                <td><?=$categoria["descricao"]?></td>
                <td><?=$categoria["total"]?></td>
           
            </tr>
<?php endforeach; ?>
</table>
</div>