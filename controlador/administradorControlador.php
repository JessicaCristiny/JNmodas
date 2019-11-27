<?php
require_once "modelo/administradorModelo.php";
function index () {
    exibir("administrador/formdata");
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


function listaProdutosPorQuant() {
    $dados = array();
    $dados["administrador"] = pegarProdutosPorQuant();
    exibir("administrador/listarquantestoque", $dados);
}

