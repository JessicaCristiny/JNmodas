<h2>Listar Categoria</h2>

<table class ="table">
    <thead>
        <tr>
            <th>ID CATEGORIA</th>
            <th>DESCRICAO</th>
           
        </tr>
    </thead>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?=$categoria ['id categoria']?></td>
        <td><?=$categoria ['descricao']?></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href ="./categoria/adicionar" class ="btn btn-primary">Nova Categoria</a>

