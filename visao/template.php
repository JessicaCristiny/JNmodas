<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./publico/css/semantic.min.css">
        <link rel="stylesheet" href="./publico/css/app.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body class="container">
        <div id="menu">
	<div id="barrapesquisa">		
	<div class="ui category search">
		<div class="ui icon input">
			<input class="prompt" type="text" placeholder="Search...">
			<i class="search icon"></i>
		</div>
		<div class="results"></div>
	</div>
	</div>
	<div id="ladoesq">

	<div class="ui animated button" tabindex="0">
			  <div class="visible content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login</font></font></div>
			  <div class="hidden content"><a href="login.html">
				<i class="right arrow icon"></a></i>
			  </div>
	</div>


	<div class="ui vertical animated button" tabindex="0">
		  <div class="hidden content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="carrinho.html">fazer compras</font></font></a></div>
		  <div class="visible content">
			<i class="shop icon"></i>
		  </div>
	</div>
	
	</div>
	<div id="logo">
		
	</div>

<div id="barramenu">
<div class="five ui buttons">
	  <button class="ui button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="./">Página Inicial</font></font></button>
	  <button class="ui button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="./cliente/listarClientes"> Cadastro</a></font></font></button>
	  <button class="ui button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="./produto/listarProdutos">Produtos</a></font></font></button>
          <button class="ui button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="./endereco/listarEnderecos">Endereços</a></font></font></button>
          <button class="ui button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="./categoria/listarCategoria">Categorias</a></font></font></button>
</div>    
</div>
</div>
           
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

        <div class="rodape">
		<div class="ui grid">
			<div class="four wide column roda">
				<h3><i class="phone icon "></i></h3>
				<p>Cel: (15)99785-5420</p>
			</div>
            
			<div class="four wide column roda">
				<h3><i class="envelope icon"></i></h3>
				<p>Email: jnmodas@gmail.com</p>
			</div>
			<div class="four wide column roda">
				<h3><i class="credit card icon"></i></h3>
				<p>10x sem juros no cartão</p>
			</div>
			<div class="four wide column roda">
				<h3><i class="truck icon"></i></h3>
				<p>Frete Gratis</p>
			</div>
		</div>
	<div class="final">
			
		<div class="avaliação">
			<div class="ui labeled button" tabindex="0">
				<div class="ui red button">
					<i class="heart icon"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gostei
				</font></font></div>
				<a class="ui basic red left pointing label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					1.048
				</font></font></a>
			</div>
		</div>
		<div class="redes">
			<button class="ui circular facebook icon button">
			  <i class="facebook icon"></i>
			</button>
			<button class="ui circular twitter icon button">
			  <i class="twitter icon"></i>
			</button>
			<button class="ui circular linkedin icon button">
			  <i class="linkedin icon"></i>
			</button>
			<button class="ui circular google plus icon button">
			  <i class="google plus icon"></i>
			</button>
		</div>
		<div class="criadoras">
			<h1> Criado por:</h1>
			<h3>Nathalia Silva</h3>
			<h3>Jessica Cristiny</h3>
		</div>
		
	</div>

</div>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic.min.js"></script>
    </body>
</html>
