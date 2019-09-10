<?php
require_once "modelo/ProdutoModelo.php";
function adicionar ($idProduto){
    if(isset($_SESSION["carrinho"])){
        $produtos = $_SESSION["carrinho"];
     
    }else{
        $produtos = array();
    }
    $produtos[]= $idProduto;
    $_SESSION["carrinho"] = $produtos;
    redirecionar("carrinho/listar");
}
function listar(){
    $produtos = $_SESSION["carrinho"];
    //print_r($produtos);
    
    $meusProdutos = array();
    
    foreach ($produtos as $IDproduto){
        echo $IDproduto;
        $produto = pegarProdutoPorId ($IDproduto);
        $meusProdutos[] = $produto;
        
    }
    
    $dados['produtos']= $meusProdutos;
    exibir("carrinho/listar", $dados);
    
}



