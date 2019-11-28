
<h1>Lista por Cidades</h1>
<table border = "1">
            <thead>
                <tr>
                    <th>idPedido</th>
                    <th>Cidade</th>
                    <th>Total</th>
                </tr>
            </thead>
<?php foreach ($cidades as $cidade): ?>
            <tr>
                <td><?=$cidade["idPedido"]?></td>
                <td><?=$cidade["cidade"]?></td>
                <td><?=$cidade["total"]?></td>
           
            </tr>
<?php endforeach; ?>
