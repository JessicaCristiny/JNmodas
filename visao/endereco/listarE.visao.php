<div class="meio">
<h2>Listar Endereços</h2>
<table border = "1">
    <thead>
        <tr>
            <th>Cidade</th>
            <th>Bairro</th>
            <th>Rua</th>
            <th>Cep</th>
            <th>Num</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Deletar</th>
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
            <td><a href="./endereco/editar/<?=$endereco['idendereco']?>">Editar</a></td>
            <td><a href="./endereco/deletar/<?=$endereco['idendereco']?>">Deletar</a></td>
        </tr>
        <?php endforeach; ?>
    </table>    
<a href="./endereco/cadastroE/<?=@$cliente['idcliente']?>" class="btn btn-primary">Novo Endereço</a>

</div>