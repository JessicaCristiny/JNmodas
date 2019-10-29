<div class="meio">
<h2></h2>
        
     
  
            <table border ="1">
                <tr>
                   
                    <th>PEDIDO</th>
                    <th>ENDERECO</th>
                    <th>FORMA DE PAGAMENTO</th>
                   	
                </tr>
            </thead>
           
            <?php foreach ($pedidos as $pedido): ?>
            <tr>
                        <td><?=$pedido['idusuario']?></td>
                        <td><?=$pedido['idendereco']?></td>
                        <td><?=$pedido['descricao']?></td>
				
                              
            </tr>
            
            <?php endforeach; ?>
            <?php if (acessoPegarPapelDoUsuario()== 'Administrador') {?>
            <a href= ".pedido/pegarPedido" class ="btn btn-primary"> Novo Pedido</a>
            <?php } ?>

