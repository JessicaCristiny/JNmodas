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
   $sql = "select endereco.logradouro, formapagamento.descricao, pedido.idendereco, pedido.idPedido
    from endereco
    inner join pedido
    ON endereco.idendereco = pedido.idendereco
    inner join formapagamento
    On formapagamento.idformapagamento = pedido.idformapagamento";

    $resultado = mysqli_query(conn(), $sql);
    $pedido = array();
    while ($linha = mysqli_fetch_assoc($resultado));
    $pedido = $linha;
   
return $pedido;
}
        

