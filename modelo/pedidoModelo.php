<?php
function salvarPedidos ($idPedido){
    $sql = "INSERT INTO pedido (idPedido, idUsuario, idendereco) VALUES ('$idPedido', '$idUsusario', '$idendereco')";
        $cnx = conn();
        $resultado = mysqli_query($cnx, $sql);
        if (!$resultado) { die ('Erro ao cadastrar produto' . mysqli_error($cnx)); }
        foreach ($produto as $produto) {
            $sql = "INSERT INTO pedido_produto (idproduto, idPedido, quantidade) VALUES ('$idproduto', '$idPedido', '$quantidade')";
            $cnx= conn();
            $resultado = mysql_query($cnx, $sql);
        }
    return 'Produto cadastrado com sucesso!';
 }

function pegarTodosPedidos(){
    $sql = "SELECT * FROM pedido";
    $sql = "SELECT * FROM pedido";
    $sql = "select enderecos.rua, formadepagamento.descricao, pedido.idendereco, pedido.idPedido
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
     
