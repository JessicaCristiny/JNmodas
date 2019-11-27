
<h1> lista de datas</h1>
<table border = "1">
            <thead>
                <tr>
                    <th>Intervalo de data</th>
                    <th>Total</th>
                </tr>
            </thead>
<?php foreach ($datas as $data): ?>
            <tr>
                <td><?=$data["datacompra"]?></td>
                <td><?=$data["total"]?></td>
           
            </tr>
<?php endforeach; ?>
