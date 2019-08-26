<?php

function buscar ($buscar){
    $sql = "select * from produto where nome like '%$buscar%'";
    $resultado = mysqli_query (conn(), $sql);
    $buscar = array ();
            while ($linha = mysqli_fetch_assoc($resultado)) {
                $buscar [] = $linha;
            }
            return $buscar;
}
