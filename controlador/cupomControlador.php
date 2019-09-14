<?php

require_once 'modelo/cupomModelo.php';

function cadastro() {
    if (ehPost()) {
        $nomecupom = $_POST ["nomecupom"];
        $desconto = $_POST ["desconto"];
        $dados = array();
        $msg = adicionarCupom( $nomecupom,$desconto);
        redirecionar("cupom/listarCupom");
        exibir("cupom/formulario", $dados);
    } else {
        exibir("cupom/formulario");
    }
}
    function listarCupom() {
        $dados = array();
        $dados["cupom"] = pegarTodosCupom();
        exibir("cupom/listar", $dados);
    }

    function ver($idcupom) {
        $dados ["cupom"] = pegarCupomPorId($idcupom);
        exibir("cupom/visualizar", $dados);
    }

    function deletar($idcupom) {
        $msg = deletarCupom($idcupom);
        redirecionar("cupom/listarCupom");
    }

    function editar($idcupom) {
        if (ehPost()) {
            $nomecupom = $_POST ["nomecupom"];
            $desconto = $_POST ["desconto"];
            editarCupom($idcupom, $nomecupom, $desconto);
            redirecionar("cupom/listarCupom");
        } else {
            $dados["cupom"] = pegarCupomPorId($idcupom);
            exibir("cupom/formulario", $dados);
        }
    }

    function adicionar($idcupom) {
        if (ehPost()) {
            $idcupom = strip_tags($_POST ["idcupom"]);
            $nomecupom = strip_tags($_POST ["nomecupom"]);
            $desconto = strip_tags($_POST ["desconto"]);
            $errors = array();
            if (count($errors) > 0) {
                $dados = array();
                $dados["errors"] = $errors;
                exibir("cupom/formulario", $dados);
            } else {
                $msg = adicionarCupom($idcupom, $nomecupom, $desconto);
                echo $msg;
                redirecionar("cupom/listarCupom");
            }
        } else {
            $dados["cupom"] = pegarCupomPorId($idcupom);
            exibir("cupom/formulario", $dados);
        }
    }

    ?>

