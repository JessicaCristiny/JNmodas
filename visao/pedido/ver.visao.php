<div class="verProduto">
<h1>Produtos comprados</h1>
<?php foreach ($produtos as $produto): ?>
<p>IdProduto: <?=$produto ['idproduto']?></p>
<p>Nome: <?=$produto['nome']?></p>
<p>Descrição: <?=$produto['descricaoPRODUTO']?></p>
<p>Valor: <?=$produto['valor']?></p>
<p>Categoria: <?=$produto['descricao']?></p>

<?php endforeach; ?>
</div>
