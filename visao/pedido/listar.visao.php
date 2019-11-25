<div class="meio">
<h2>Lista de Pedidos</h2>

<table border ="1">
 <tr>
                   
                    <th>Endereço</th>
                    <th>Descrição</th>
                    <th>idEndereco</th>
                    <th>idPedido</th>
                    <th>data da compra</th>
                    <th>Ver Produtos comprados</th>
                   	
                </tr>
         
           
            <?php foreach ($pedidos as $pedido): ?>
            <tr>
                        <td><?=$pedido['rua']?></td>
                        <td><?=$pedido['descricao']?></td>
                        <td><?=$pedido['idendereco']?></td>
                        <td><?=$pedido['idPedido']?></td>
                        <td><?=$pedido['datacompra']?></td>
                        <td><a href="./pedido/ver/<?=$pedido['idPedido']?>">Ver</a></td>
    
                             
            </tr>
            
            <?php endforeach; ?>
            <?php if (acessoPegarPapelDoUsuario()== 'Administrador') {?>
            <a href= ".pedido/pegarPedido" class ="btn btn-primary"> Novo Pedido</a>
            <?php } ?>

</div>