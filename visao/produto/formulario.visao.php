
<form action="" method="POST">
    Nome: <input type="text" name="nome" value = "<?=@$produto['nome']?>">
    Descrição: <input type="text" name="descricao" value = "<?=@$produto['descricao']?>">
    Valor: <input type="text" name="valor" value = "<?=@$produto['valor']?>">
    <select name="categoria">
		<option value="default">Selecione uma categoria</option>
		
		<?php foreach ($categorias as $categoria):?>
			<option value="<?=$categoria["idcategoria"]?>"><?=$categoria["descricao"]?></option>
		<?php endforeach;?>
	</select><br>
    <button type="submit"> Enviar </button>
    
</form>

<?php

$nomes = array();
$nomes[0] = "Jessica";
$nomes[1] = "Nathalia";
$nomes[2] = "Danilo";

for($i=0; $i<=2; $i++) {
    echo $nomes[$i];
}

foreach ($nomes as $a) {
    echo $a;
}

