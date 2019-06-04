<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
    <tr>
        <td><a href="./cliente/listarClientes">Clientes</a></td>
        <td><a href="./produto/listarProdutos">Produtos</a></td>
        <td><a href="./endereco/listarEnderecos">Endereços</a></td>
        <td><a href="./categoria/listarCategoria">Categorias</a></td>
    </tr>

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

    </body>
</html>
