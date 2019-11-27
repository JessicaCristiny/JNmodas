<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2> Produto e Estoque: </h2>
         <div class="caixa">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Quantidade em estoque</th>
                            
                        </tr>
                    </thead>
                    <?php foreach ($produtos as $produto):?>
                    <tr>  
                        <td><?=$produto['nome']?></td>
                        <td><?=$produto['qtde']?></td>
                       
                    </tr>

                    <?php endforeach;?>
                </table>
            </div>
       
    </body>
</html>