<div class="meio">
<form action="" method="POST" enctype="multipart/form-data">
    Nome: <input type="text" name="nome" value = "<?=@$produto['nome']?>">
    Descrição: <input type="text" name="descricao" value = "<?=@$produto['descricaoPRODUTO']?>">
    Valor: <input type="text" name="valor" value = "<?=@$produto['valor']?>">
    Estoque minimo: <input type="text" name="estoqueMinimo" value = "<?=@$produto['estoqueMinimo']?>">
    Estoque maximo: <input type="text" name="estoqueMaximo" value = "<?=@$produto['estoqueMaximo']?>">
    <select name="categoria">
		<option value="default">Selecione uma categoria</option>
		
		<?php foreach ($categorias as $categoria):?>
			<option value="<?=$categoria["idcategoria"]?>"><?=$categoria["descricao"]?></option>
		<?php endforeach;?>
	</select><br>
        <input type="file" name="imagem">
    <button type="submit"> Enviar </button>
    
</form>

</div>
