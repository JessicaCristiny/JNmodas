<?php

function intervalos_data ($data1, $data2){
    $sql ="select datacompra from pedido where datacompra >='$data1' and datacompra <='$data2'";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $pedidos [] = $linha;
    }
return $pedidos;
}
function pedido_cidade(){
    
}
function pegarProdutosPorQuant() {
    $sql = "select * from produto";
    $resultado = mysqli_query(conn(), $sql);
    $produto = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produto[] = $linha;
    }
    return $produto;
}
