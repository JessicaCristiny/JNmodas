<?php
require_once 'modelo/formaPagamentoModelo.php';
function formulario (){
    if (ehPost ()){
        $descricao = strip_tags($_POST ["descricao"]);
       
        $msg = adicionarFormaPagamento($descricao);
        redirecionar('formaPagamento/listarFormaPagamento');
        
        //redirecionar("formulario/index");
    } else {
        exibir("formaPagamento/formulario");
    }
}
function listarFormaPagamento() {
    $dados = array();
    $dados["formaPagamentos"] = pegarTodasFormaPagamento();
    exibir("formaPagamento/listar", $dados);
}
function ver($id){
    $dados["formaPagamento"] = pegarFormaPagamentoPorId($id);
    exibir("formaPagamento/visualizar", $dados);
}
function deletar ($idFormadePagamento){
    $msg = deletarFormaPagamento($idFormadePagamento);
    redirecionar('formaPagamento/listarFormaPagamento');        
}
function editar ($id){
    if(ehPost()){
        $descricao = $_POST["descricao"];
        editarFormaPagamento ($idFormdadePagamento, $descricao);
        redirecionar('formaPagamento/listarFormaPagamento');
    }else {
        $dados["formaPagamento"] = pegarFormaPagamentoPorId($id);
        exibir("formaPagamento/formulario", $dados);
    }
}
