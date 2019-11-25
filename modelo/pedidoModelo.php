<?php
function salvarPedido ($idendereco, $idFormadePagamento, $idUsuario, $produtos){
    $sql = "INSERT INTO pedido (idendereco, idFormadePagamento, idUsuario, datacompra) VALUES ('$idendereco', '$idFormadePagamento', '$idUsuario', NOW())";
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
    $sql= "select * from pedido_produto";
     $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $pedidos [] = $linha;
    }
return $pedidos;
}