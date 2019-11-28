<?php

function intervalos_data ($data1, $data2){
    $sql ="select * from pedido where datacompra between '$data1' and '$data2'";
    $resultado = mysqli_query(conn(), $sql);
    $dados = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $dados [] = $linha;
    }
return $dados;
}
function pedido_cidade(){
    $sql="select pedido.idPedido, pedido.datacompra, pedido.total, enderecos.cidade from pedido 
            inner join enderecos
            on enderecos.idendereco = pedido.idendereco 
            order by enderecos.cidade ";
     $resultado = mysqli_query(conn(), $sql);
    $dados = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $dados [] = $linha;
    }
return $dados;
    
}
function pedido_categoria (){
    $sql = "select pedido.idPedido, pedido.total, categoria.descricao from pedido
        inner join pedido_produto
        on pedido.idPedido = pedido_produto.idPedido
        inner join produto
        on pedido_produto.idproduto = produto.idproduto
        inner join categoria
        on produto.categoria =  categoria.idcategoria
        order by categoria.descricao";
    $resultado = mysqli_query(conn(), $sql);
    $dados = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $dados [] = $linha;
    }
return $dados;
    
}
function fatoramento_mensal ($mes){
    $sql = "select datacompra, total from pedido where date_format(datacompra, '%m') = '$mes'";
    $resultado = mysqli_query(conn(), $sql);
    $dados = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $dados [] = $linha;
    }
return $dados;
    
}
function fatoramento_anual($ano){
    $sql = "select datacompra, total from pedido where date_format(datacompra, '%Y') = '$ano'";
    $resultado = mysqli_query(conn(), $sql);
    $dados = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $dados [] = $linha;
    }
return $dados;
    
}
function pegar_produtos_por_quant() {
    $sql = "select nome, estoqueMaximo from produto";
    $resultado = mysqli_query(conn(), $sql);
    $dados = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $dados[] = $linha;
    }
    return $dados;
}
