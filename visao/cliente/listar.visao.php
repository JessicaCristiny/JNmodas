<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Clientes</h2>
        <table border = "1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cpf</th>
                    <th>Data Nascimento</th>
                    <th>Cel</th>
                </tr>
            </thead>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?=$cliente['nomecompleto']?></td>
                    <td><?=$cliente['email']?></td>
                    <td><?=$cliente['cpf']?></td>
                    <td><?=$cliente['datanasci']?></td>
                    <td><?=$cliente['cel']?></td>
                    <td><a href="./cliente/ver/<?=$cliente['idcliente']?>">Ver</a></td>
                </tr>
                <?php endforeach; ?>
            </table>    
        <a href="./cliente/cadastro" class="btn btn-primary">Novo Cliente</a>
        
    </body>
</html>
