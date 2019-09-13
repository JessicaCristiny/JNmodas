<?php

require_once "modelo/ProdutoModelo.php";

function adicionar($idProduto) {
    if (isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
    } else {
        $produtos = array();
    }
    $produtos[] = $idProduto;
    $_SESSION["carrinho"] = $produtos;
    redirecionar("carrinho/listar");
}

function listar() {
    if (isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        $meusProdutos = array();
        $quant = 0;
        $subtotal = 0;
        foreach ($produtos as $IDproduto) {
            //echo $IDproduto;
            $produto = pegarProdutoPorId($IDproduto);
            $preco = $produto['valor'];
            $subtotal = $preco + $subtotal;
            $meusProdutos[] = $produto;
            $quant = $quant + 1;
        }
        $dados['produtos'] = $meusProdutos;
        $dados['subtotal'] = $subtotal;
        $dados['quant'] = $quant;
        exibir("carrinho/listar", $dados);
    } else {
        $produtos = array();
        redirecionar("produto/listarprodutos");
    }
}

function remover() {
    unset($_SESSION["carrinho"]);
    session_destroy();
    redirecionar("produto/listarProdutos");
}
