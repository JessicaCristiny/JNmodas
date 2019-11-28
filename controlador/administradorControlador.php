<?php
require_once "modelo/administradorModelo.php";
function index () {
    exibir("administrador/relatorios");
}

function pedido_intervalo_data() {
    if (ehPost()) {        
        $data1 = $_POST["data_1"];
        $data2 = $_POST["data_2"];
        $dados ["datas"] = intervalos_data($data1, $data2);
        exibir("administrador/listarINTERVALO", $dados);
        
    } else {
        exibir("administrador/formdata");
    }
}
function pedido_por_cidades (){
        $dados ["cidades"] = pedido_cidade();
        exibir("administrador/listarCIDADES", $dados);
}
function pedido_por_categoria (){
    $dados ["categorias"] = pedido_categoria ();
    exibir ("administrador/listarCATEGORIAS", $dados);
}
function pedido_produtos_por_quant() {
    $dados = array();
    $dados["quantidades"] = pegar_produtos_por_quant();
    exibir("administrador/listarquantestoque", $dados);
}

