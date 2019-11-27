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
    
}

