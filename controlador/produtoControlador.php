<?php 
    require_once "modelo/ProdutoModelo.php";
function visualizar() {
    $vetor_dados = array();
    $vetor_dados ["nome"]= "Salto Feminino";
    $vetor_dados ["descricao"]= "Salto Feminino. Sandália feminina Meia pata. Material: veludo, Marca: Griffe, Salto alto";
    $vetor_dados ["valor"]=  "129,90";
    exibir("produto/visualizar", $vetor_dados);
}
function adicionar(){
    if (ehPost ()){
        $nome = strip_tags($_POST ["nome"]);
        $email =  strip_tags( $_POST ["email"]);
        $senha = strip_tags($_POST ["senha"]);
        
    //nomeproduto
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
    //senha
         if (strlen(trim($_POST['senha'])) == 0) {
            echo "Você deve inserir uma senha. <br>";
        }
        $senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT);
        if ($senha == FALSE) {
            echo  "Informe uma senha valida.<br>";
        }

         $msg = adicionarProduto($nomeProduto, $tamanho, $descricao, $preco, $quantidade);
           echo $msg;
        
        //redirecionar("formulario/index");
    } else {
        exibir("produto/formulario");
    }
    
}