<?php
require_once 'modelo/clienteModelo.php';
function cadastro(){
    if (ehPost ()){
        $nome = strip_tags($_POST ["nome"]);
        $email = strip_tags($_POST ["email"]);
        $cpf = strip_tags($_POST ["cpf"]);
        $data = strip_tags($_POST ["data"]);
        $cel = strip_tags($_POST ["cel"]);
        $senha = strip_tags($_POST ["senha"]);
        
    //nome
        if (strlen(trim($_POST['nome'])) == 0) {
            echo "Você deve inserir seu nome. <br>";
        }
 
        if(is_string($nome)){

        }else{
            echo 'Não é do tipo String.';
        }
    //email  
        if (strlen(trim($_POST['email'])) == 0) {
            echo "Você deve inserir um e-mail. <br>";
        }
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($email == FALSE) {
            echo  "Informe um email valido.<br>";
        }
    //CPF
        if (strlen(trim($_POST['cpf'])) == 0) {
            echo "Você deve inserir seu CPF. <br>";
        }
       
    //data
         if (strlen(trim($_POST['data'])) == 0) {
            echo "Você deve inserir sua data de nascimento. <br>";
        }
    //cel
        if (strlen(trim($_POST['cel'])) == 0) {
            echo "Você deve inserir seu numero de celular. <br>";
        }
        $cel = filter_input(INPUT_POST, 'cel', FILTER_VALIDATE_INT);
        if ($cel == FALSE) {
            echo  "Informe um numero valido.<br>";
        }
    //senha
        if (strlen(trim($_POST['senha'])) == 0) {
            echo "Você deve inserir uma senha. <br>";
        }
        $senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);
        if ($senha == FALSE) {  
            echo  "Informe uma senha valida.<br>";
        }
        $msg = adicionarCliente($nome, $email, $cpf, $data, $cel, $senha);
        redirecionar('cliente/listarClientes');
        
        //redirecionar("formulario/index");
    } else {
        exibir("cliente/cadastro");
    }
    
}
function listarClientes(){
    $dados = array ();
    $dados ["clientes"] = pegarTodosClientes();
    exibir ("cliente/listar", $dados);
}
function ver($id){
    $dados["cliente"] = pegarClientePorId($id);
    exibir("cliente/visualizar", $dados);
}
function deletar($id){
    $msg = deletarCliente($id);
    redirecionar('cliente/listarClientes');
}
function editar($id){
    if (ehPost ()){
        $nome = $_POST ["nome"];
        $email = $_POST ["email"];
        $cpf = $_POST ["cpf"];
        $data = $_POST ["data"];
        $cel = $_POST ["cel"];
        $senha = $_POST ["senha"];
        editarCliente($id, $nome, $email, $cpf, $data, $cel, $senha);
        redirecionar("cliente/listarClientes");
    }else {
        $dados["cliente"] = pegarClientePorId($id);
        exibir("cliente/cadastro", $dados);
    }
}