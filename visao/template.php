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
        <div class="menu">
            <div id="barrapesquisa">		
                <div class="ui category search">
                    <div class="ui icon input">
                        <form action="./busca/pesquisar" method="POST"> 
                            <label for="email"><b>Pesquisar</b></label>
                            <input type="text" placeholder="Pesquisar" name="pesquisar" required="">
                        </form>
                    </div>
                    <div class="results"></div>
                </div>
            </div>
          
            <div id="logo">
             <img src="./publico/imagem/logo.png">
            </div>


            <div id="barramenu">
            
                <a class="botaomenu" href="./">Página Inicial</a>
                <a class="botaomenu"href="./cliente/listarClientes">Clientes</a>
                <?php if (acessoPegarPapelDoUsuario() == "adm"): ?>
                    <a class="botaomenu"href="./produto/listarProdutos">Produtos</a>
                <?php endif ?>
                <a class="botaomenu"href="./endereco/listarEnderecos">Endereços</a>
                <?php if (acessoPegarPapelDoUsuario() == "adm"): ?>
                    <a class="botaomenu"href="./categoria/listarCategoria">Categorias</a>
                <?php endif ?>
                <?php if (acessoPegarPapelDoUsuario() == "adm"): ?>
                    <a class="botaomenu"href="./cupom/listarCupom">Cupom</a>
                <?php endif ?>
                <?php if (acessoPegarPapelDoUsuario() == "adm"): ?>
                <a class="botaomenu"href="./formaPagamento/listarFormaPagamento">Forma de Pagamento</a>
                <?php endif ?>
                <a class="botaomenu"href="./carrinho/listar">Carrinho</a>
                
                <a class="botaomenu"href="./administrador/">Administrador</a>
                
                <a class="botaomenu" href="./cliente/ver/<?=acessoPegarUsuarioLogado();?>">Minha Conta</a>
                 
                <a class="botaomenu" href="./login/logout">Sair</a>

            </div>    
        </div>


        <main class="container">
            <div class="meio">
            <?php require $viewFilePath; ?>
        </div>
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
