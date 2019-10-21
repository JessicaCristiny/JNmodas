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
        echo "ahhhhhhhhhhh" . $nomecupom;
        
        
        
        $cupom = pegarCupomPorNome($nomecupom);
        print_r($cupom);
    }
    
    $dados = array();
    $dados["formaPagamentos"] = pegarTodasFormaPagamento();
    $dados ["enderecos"] = pegarTodosEnderecos();
    $dados["cupom"] = pegarTodosCupom();
    $IDPRODUTOS = $_SESSION["carrinho"];

    
    $vetorProdutos = array();
    
    $quant = 0;
    $subtotal = 0;
    foreach ($IDPRODUTOS as $IDPRODUTO) {
        $produto = pegarProdutoPorId($IDPRODUTO);
        $preco = $produto['valor'];
        if ($cupom == null){
        $subtotal = $preco + $subtotal;
        }else {
            $desconto = $cupom['desconto'];
            $desconto = $desconto/100;
            $subtotal = $subtotal * $desconto;
            $subtotal = $subtotal - $desconto;
            $subtotal = $preco + $subtotal;
            echo " olha o descpnto".$desconto;
            //echo $subtotal;
        }
        $quant = $quant + 1;
        $vetorProdutos[] = $produto;
    }

    $dados['subtotal'] = $subtotal;
    $dados['quant'] = $quant;

    $dados ["visaoProdutos"] = $vetorProdutos;
    exibir("pedido/finalizarPedido", $dados);
}
