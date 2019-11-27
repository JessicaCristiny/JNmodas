<?php

require_once 'modelo/pedidoModelo.php';
require_once 'modelo/formaPagamentoModelo.php';
require_once 'modelo/enderecoModelo.php';
require_once 'modelo/cupomModelo.php';
require_once "modelo/ProdutoModelo.php";

function salvaPedido() {
    if (ehPost()) {
       
$IDPRODUTOS = $_SESSION["carrinho"];
        $idEndereco = $_POST["endereco"];
        $idFormaPagamento = $_POST["forma"];
        $idUsuario = acessoPegarUsuarioLogado();
        $subtotal = 0;
        foreach ($IDPRODUTOS as $IDPRODUTO) {
        $produto = pegarProdutoPorId($IDPRODUTO);
        $subtotal +=  $produto['valor'];
        
       
    }
    
       
        
        
        
        $produtos = array();
        $produtos = $_SESSION["carrinho"] ;
        
        

        $msg = salvarPedido($idEndereco, $idFormaPagamento, $idUsuario, $subtotal, $produtos);
        redirecionar("pedido/listarpedidos");
    } else {
       echo "deu erro, tente novamente";
    }
}

function finalizarPedido() {
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
        $subtotal = $subtotal + $preco;
        $quant = $quant + 1;
        $vetorProdutos[] = $produto;
    }
    
     if (ehPost()) {
        $nomecupom = $_POST["nomecupom"];           
        $cupom = pegarCupomPorNome($nomecupom);

        $desconto = $cupom['desconto'];
        $x = ($desconto * $subtotal)/100;
        $subtotal = $subtotal - $x;
    }
    
    $dados['subtotal'] = $subtotal;
    $dados['quant'] = $quant;

    $dados ["visaoProdutos"] = $vetorProdutos;
    exibir("pedido/finalizarPedido", $dados);
}
function listarpedidos () {
    $dados = array();
    $dados ["pedidos"] = pegarTodosPedidos();
    exibir ("pedido/listar" , $dados);
}
function ver ($idPedido){
    $dados ["produtos"] = pegarProdutosDoPedido ($idPedido);
    exibir("pedido/ver", $dados);
}