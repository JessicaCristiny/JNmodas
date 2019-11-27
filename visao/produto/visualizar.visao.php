<div class="verProduto">
<h1>Visualizar</h1>
<p>Id: <?=$produto ['idProduto']?></p>
<p>Nome: <?=$produto['nome']?></p>
<p>Descrição: <?=$produto['descricaoPRODUTO']?></p>
<p>Valor: <?=$produto['valor']?></p>
<p>Imagem: <?=$produto['imagem']?></p>
<img src="<?=$produto['imagem']?>" alt="imagem">

<a id="botaoCompra"href="./carrinho/adicionar/<?=$produto['idProduto']?>">Comprar</a>
</div>
