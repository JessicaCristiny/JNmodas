<?php
require_once "modelo/buscaModelo.php";
function pesquisar (){
    if (ehPost()) {
        $buscar = $_POST["pesquisar"];
        alert(buscar($pesquisar));
    } else {
        exibir("buscar/pesquisar");
}
}

