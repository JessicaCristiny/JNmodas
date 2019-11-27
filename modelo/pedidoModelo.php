<?php
function salvarPedido ($idendereco, $idFormadePagamento, $idUsuario, $subtotal, $produtos){
    $sql = "INSERT INTO pedido (idendereco, idFormadePagamento, idUsuario, total, datacompra) VALUES ('$idendereco', '$idFormadePagamento', '$idUsuario', '$subtotal', NOW())";
        $cnx = conn();
        $resultado = mysqli_query($cnx, $sql);
        if (!$resultado) { die ('Erro ao cadastrar produto' . mysqli_error($cnx)); }
       
        $idPedido = mysqli_insert_id($cnx);
        
        foreach ($produtos as $produto) {
            $sql = "INSERT INTO pedido_produto (idProduto, idPedido, quantidade) VALUES ('$produto', '$idPedido', '0')";
            $cnx= conn();
            $resultado = mysqli_query($cnx, $sql);
            if (!$resultado) { die ('Erro ao cadastrar produto' . mysqli_error($cnx)); }
       
        }
    return 'Produto cadastrado com sucesso!';
 }

function pegarTodosPedidos(){
    $sql = "select enderecos.rua, formadepagamento.descricao, pedido.idendereco, pedido.idPedido, datacompra
    from enderecos
    inner join pedido
    ON enderecos.idendereco = pedido.idendereco
    inner join formadepagamento
    On formadepagamento.idFormadePagamento = pedido.idFormadePagamento";

    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $pedidos [] = $linha;
    }
return $pedidos;
}
     
function pegarProdutosDoPedido ($idPedido){
    $sql= "select pedido_produto.idproduto, produto.nome, produto.descricaoPRODUTO, produto.valor, produto.categoria, categoria.idcategoria, categoria.descricao from pedido_produto 
             inner join produto 
             on pedido_produto.idproduto = produto.idproduto
             inner join categoria 
             on produto.categoria = categoria.idcategoria
             where idPedido = '$idPedido'";
     $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $pedidos [] = $linha;
    }
return $pedidos;
}