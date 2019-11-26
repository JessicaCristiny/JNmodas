<?php

function conn() {
    $arq = fopen ("dados.txt", "a+");
    while (!feof($arq)) {
        echo fopen ($arq) . "<br/>";
    }
    
    $arq = fopen("dados.txt", "a+");
    while (!feof($arq)) {
    echo fgets($arq) . "<br />";
}
    $arq = fopen("dados.txt", "a+");
    while (!feof($arq)) {
    echo fgets($arq) . "<br />";
}
    fclose($arq);
    
    $arq = fopen("dados.txt", "a+");
    fwrite($arq, "Linha a ser adicionado no arquivo.\n");
    fclose($arq);
    
    
    $cnx = mysqli_connect("localhost", "root", "", "jnmodas");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}
