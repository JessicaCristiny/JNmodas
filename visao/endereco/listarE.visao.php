<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Endereços</h2>
        <table border = "1">
            <thead>
                <tr>
                    <th>Cidade</th>
                    <th>Bairro</th>
                    <th>Rua</th>
                    <th>Cep</th>
                    <th>Num</th>
                </tr>
            </thead>
                <?php foreach ($enderecos as $endereco): ?>
                <tr>
                    <td><?=$endereco['cidade']?></td>
                    <td><?=$endereco['bairro']?></td>
                    <td><?=$endereco['rua']?></td>
                    <td><?=$endereco['cep']?></td>
                    <td><?=$endereco['num']?></td>
                    <td><a href="./endereco/ver/<?=$endereco['idendereco']?>">Ver</a></td>
                </tr>
                <?php endforeach; ?>
            </table>    
        <a href="./endereco/cadastroE" class="btn btn-primary">Novo Endereço</a>
       
    </body>
</html>
