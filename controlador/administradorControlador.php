<?php
require_once "modelo/adminstradorModelo.php";
function pedido_intervalo_data() {
    if (ehPost()) {
        $data1 = $_POST["data_1"];
        $data2 = $_POST["data_2"];
        $msg = intervalos_data ($data1, $data2);
        redirecionar("administrador/listarINTERVALO");
    } else {
       echo "deu erro, tente novamente";
    }
}
function listaProdutosPorQuant() {
    $dados = array();
    $dados["administrador"] = pegarProdutosPorQuant();
    exibir("administrador/listarquantestoque", $dados);
}
