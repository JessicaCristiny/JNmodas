<?php
require_once 'modelo/enderecoModelo.php';
function cadastroE($idcliente){
    if (ehPost ()){
        $cidade = strip_tags($_POST ["cidade"]);
        $bairro = strip_tags($_POST ["bairro"]);
        $rua = strip_tags($_POST ["rua"]);
        $cep = strip_tags($_POST ["cep"]);
        $num = strip_tags($_POST ["num"]);
        
    //cidade
        if (strlen(trim($_POST['cidade'])) == 0) {
            echo "Você deve inserir sua cidade. <br>";
        }
 
        if(is_string($cidade)){

        }else{
            echo 'Não é do tipo String.';
        }
        
    //bairro
        if (strlen(trim($_POST['bairro'])) == 0) {
            echo "Você deve inserir seu bairro. <br>";
        }
 
        if(is_string($bairro)){

        }else{
            echo 'Não é do tipo String.';
        }
    
    //rua
        if (strlen(trim($_POST['rua'])) == 0) {
            echo "Você deve inserir sua rua. <br>";
        }
 
        if(is_string($rua)){

        }else{
            echo 'Não é do tipo String.';
        }
    //cep
        if (strlen(trim($_POST['cep'])) == 0) {
            echo "Você deve inserir seu cep. <br>";
        }
 
        if(is_string($cep)){

        }else{
            echo 'Não é do tipo String.';
        }  
    //num
        if (strlen(trim($_POST['num'])) == 0) {
            echo "Você deve inserir seu numero. <br>";
        }
 
        if(is_string($num)){

        }else{
            echo 'Não é do tipo String.';
        }
    $msg = adicionarEndereco($idcliente, $cidade, $bairro, $rua, $cep, $num);
    redirecionar("endereco/listarEnderecos");   
        
    } else {
        exibir("endereco/cadastroE");
    }
    
}
function listarEnderecos(){
    $dados = array ();
    $dados ["enderecos"] = pegarTodosEnderecos();
    exibir ("endereco/listarE", $dados);
}
function ver($id){
    $dados["endereco"] = pegarEnderecoPorId($id);
    exibir("endereco/visualizar", $dados);
}
function deletar($id){
    $msg = deletarEndereco($id);
    redirecionar("endereco/listarEnderecos");
}
function editar($id) {
    if (ehPost ()){
        $cidade = $_POST ["cidade"];
        $bairro = $_POST ["bairro"];
        $rua = $_POST ["rua"];
        $cep = $_POST ["cep"];
        $num = $_POST ["num"];
        editarEnderecos($id, $cidade, $bairro, $rua, $cep, $num);
        redirecionar("endereco/listarEnderecos");
    }else {
        $dados["endereco"] = pegarEnderecoPorId($id);
        exibir("endereco/cadastroE", $dados);
    }
    
}