<div class="meio">
        <h2>Listar Clientes</h2>
        <table border = "1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cpf</th>
                    <th>Data Nascimento</th>
                    <th>Cel</th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Deletar</th>
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
                    <td><a href="./cliente/editar/<?=$cliente['idcliente']?>">Editar</a></td>
                    <td><a href="./cliente/deletar/<?=$cliente['idcliente']?>">Deletar</a></td>
                    
                                      
                </tr>
                <?php endforeach; ?>
            </table>    
        <a href="./cliente/cadastro" class="btn btn-primary">Novo Cliente</a>
</div>
