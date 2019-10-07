<?php
require_once 'modelo/pedidoModelo.php';
require_once 'modelo/formaPagamentoModelo.php';
require_once 'modelo/enderecoModelo.php';

function salvaPedido (){
    if (ehPost()){
        $descricao = strip_tags($_POST ["descricao"]); 
        $dados = array();
        $msg = salvarProdutos($descricao);
        redirecionar("pedido/finalizarPedido");

    }else {
        
    }
}
function finalizarPedido () {
    $dados = array();
    $dados["formaPagamentos"] = pegarTodasFormaPagamento();
    $dados ["enderecos"] = pegarTodosEnderecos();
    $produtos = $_SESSION["carrinho"];
    $dados ["h"] = $produtos;
    exibir("pedido/finalizarPedido", $dados);
}
