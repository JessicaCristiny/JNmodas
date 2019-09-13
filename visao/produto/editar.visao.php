<div class="meio">
<form action="" method="POST">
    Nome: <input type="text" name="nome" value = "<?=@$produto['nome']?>">
    Descrição: <input type="text" name="descricao" value = "<?=@$produto['descricao']?>">
    Valor: <input type="text" name="valor" value = "<?=@$produto['valor']?>">
    Estoque minimo: <input type="text" name="estoqueMinimo" value = "<?=@$produto['estoqueMinimo']?>">
    Estoque maximo: <input type="text" name="estoqueMaximo" value = "<?=@$produto['estoqueMaximo']?>">
    <select name="categoria">
		<option value="default">Selecione uma categoria</option>
		
		<?php foreach ($categorias as $categoria):?>
			<option value="<?=$categoria["idcategoria"]?>"><?=$categoria["descricao"]?></option>
		<?php endforeach;?>
	</select><br>
    <button type="submit"> Enviar </button>
    
</form>

</div>
