<div class="meio">
<h2>Listar Formas de Pagamento</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>DESCRICAO</th>
                        <th>VER</th>
                        <th>EDITAR</th>
                        <th>Deletar</th>
			
		</tr>
	</thead>
	<?php foreach ($formaPagamentos as $formaPagamento): ?>
		<tr>
			<td><?=$formaPagamento['idFormadePagamento']?></td>
			<td><?=$formaPagamento['descricao']?></td>
                        <td><a href="./formaPagamento/ver/<?=$formaPagamento['idFormadePagamento']?>">ver</a></td>
                        <td><a href="./formaPagamento/editar/<?=$formaPagamento['idFormadePagamento']?>">Editar</a></td>
                        <td><a href="./formaPagamento/deletar/<?=$formaPagamento['idFormadePagamento']?>">Deletar</a></td>
		</tr>
	<?php endforeach; ?>
</table>
<a href="./formaPagamento/formulario" class="btn btn-primary"> Nova Forma de Pagamento</a>
</div>