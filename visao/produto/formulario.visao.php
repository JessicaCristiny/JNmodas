<div class="meio">
<form action="" method="POST" enctype="multipart/form-data">
    Nome: <input type="text" name="nome" placeholder="Nome"value = "<?=@$produto['nome']?>">
    Descrição: <input type="text" name="descricao" placeholder="Descrição"value = "<?=@$produto['descricao']?>">
    Valor: <input type="text" name="valor" placeholder="00,00" value = "<?=@$produto['valor']?>">
    Estoque minimo: <input type="text" name="estoqueMinimo" placeholder="x"value = "<?=@$produto['estoqueMinimo']?>">
    Estoque maximo: <input type="text" name="estoqueMaximo" placeholder="y"value = "<?=@$produto['estoqueMaximo']?>">
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
