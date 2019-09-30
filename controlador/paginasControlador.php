<?php
require_once 'modelo/produtoModelo.php';
/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */
/** anon */
function index() {
    $dados ["produtos"] = pegarTodosProdutos();
    exibir("paginas/inicial", $dados);
}
/** anon */
function sobre(){
    exibir("paginas/sobre");
}
/** anon */
function mapa(){
    exibir("paginas/mapa");
}



