<?php

function buscar (){
    $sql = "select * from produto where nome like %$buscar%";
    $resultado = mysqli_query (conn(), $sql);
    $buscar = array ();
            while ($linha = mysqli_fetch_assoc($resultado)) {
                $buscar [] = $linha;
            }
            return $buscar;
}


if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}
