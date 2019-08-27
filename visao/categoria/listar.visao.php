<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Categoria</h2>

        <table border ="1">
            <thead>
                <tr>
                    <th>ID CATEGORIA</th>
                    <th>DESCRICAO</th>
                    <th>Visualizar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?=$categoria['idcategoria']?></td>
                <td><?=$categoria['descricao']?></td>
                <td><a href="./categoria/ver/<?=$categoria['idcategoria']?>">Ver</a></td>
                <td><a href ="./categoria/editar/<?=$categoria['idcategoria']?>">Alterar</a></td>
                <td><a href ="./categoria/deletar/<?=$categoria['idcategoria']?>">Deletar</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href ="./categoria/adicionar" class ="btn btn-primary">Nova Categoria</a>
        <select> </select>
        
</body>
</html>

