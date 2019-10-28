<?php
function salvarPedidos ($idPedido){
    $sql = "INSERT INTO pedido (idPedido, idUsuario, idendereco) VALUES ('$idPedido', '$idUsusario', '$idendereco')";
        $cnx = conn();
        $resultado = mysqli_query($cnx, $sql);
        if (!$resultado) { die ('Erro ao cadastrar produto' . mysqli_error($cnx)); }
 foreach ($produto as $pedido) {
     $sql = "INSERT INTO pedido_produto (idproduto, idPedido, quantidade) VALUES ('$idproduto', '$idPedido', '$quantidade')";
     
 }
 }
          return 'Produto cadastrado com sucesso!';
        

