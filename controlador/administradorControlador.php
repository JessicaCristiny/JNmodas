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
function pedido_fatoramento_mensal (){
    $total = 0;
    if(ehPost()){
    $mes = $_POST["mes"];
    $dados = fatoramento_mensal ($mes);
    foreach($dados as $dado):
        $total += $dado["total"];
    endforeach;
    $dados ["totalzao"] = $total;
    exibir("administrador/listarMENSAL", $dados);
}else {
    exibir("administrador/formMENSAL");
}
}
function pedido_fatoramento_anual (){
    $total = 0;
    if(ehPost()){
        $ano = $_POST["ano"];
        $dados = fatoramento_anual($ano);
        foreach ($dados as $dado):
            $total += $dado["total"];
        endforeach;
        $dados["total"] = $total;
        exibir("administrador/listarANUAL", $dados);
        
    } else{
        exibir("administrador/formANUAL");
    }
}
function pedido_produtos_por_quant() {
    $dados["quantidades"] = pegar_produtos_por_quant();
    exibir("administrador/listarQUANTIDADE", $dados);
}
