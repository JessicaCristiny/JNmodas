<?php

require_once 'modelo/pedidoModelo.php';
require_once 'modelo/formaPagamentoModelo.php';
require_once 'modelo/enderecoModelo.php';
require_once 'modelo/cupomModelo.php';
require_once "modelo/ProdutoModelo.php";

function salvaPedido() {
    if (ehPost()) {
        $descricao = strip_tags($_POST ["descricao"]);
        $dados = array();
        $msg = salvarProdutos($descricao);
        redirecionar("pedido/finalizarPedido");
    } else {
        
    }
}

function finalizarPedido() {
    
    
    if (ehPost()) {
        $nomecupom = $_POST["nomecupom"];   
    }
    
    $dados = array();
    $dados["formaPagamentos"] = pegarTodasFormaPagamento();
    $dados ["enderecos"] = pegarTodosEnderecos();
    $dados["cupom"] = pegarTodosCupom();
    $IDPRODUTOS = $_SESSION["carrinho"];

    
    $vetorProdutos = array();
    $desconto = pegarCupomPorNome($nomecupom);
    $quant = 0;
    $subtotal = 0;
    foreach ($IDPRODUTOS as $IDPRODUTO) {
        $produto = pegarProdutoPorId($IDPRODUTO);
        $preco = $produto['valor'];
        
        $subtotal = $preco + $subtotal - $desconto;
        $quant = $quant + 1;
        $vetorProdutos[] = $produto;
    }

    $dados['subtotal'] = $subtotal;
    $dados['quant'] = $quant;

    $dados ["visaoProdutos"] = $vetorProdutos;
    exibir("pedido/finalizarPedido", $dados);
}
