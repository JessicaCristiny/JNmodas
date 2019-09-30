<?php
require_once "modelo/buscaModelo.php";
/** anon */
function pesquisar (){
    if (ehPost()) {
        $buscar = $_POST["pesquisar"];
        $resultadoBusca = buscar($buscar);
        $dados ["buscar"] = $resultadoBusca;
        exibir("buscar/pesquisar", $dados);
    } else {
        exibir("buscar/pesquisar");
}
}

