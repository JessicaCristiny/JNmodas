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
        $decricao =  strip_tags( $_POST ["descricao"]);
        $valor = strip_tags($_POST ["valor"]);
        
    //nomeproduto
        if (strlen(trim($_POST['nome'])) == 0) {
            echo "Você deve inserir seu nome. <br>";
        }
 
        if(is_string($nome)){

        }else{
            echo 'Não é do tipo String.';
        }   
        
        if (strlen(trim($_POST['descricao'])) == 0) {
            echo "Você deve inserir um e-mail. <br>";
        }
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_VALIDATE_EMAIL);
        if ($descricao == FALSE) {
            echo  "Informe um email valido.<br>";
        }
    //
         if (strlen(trim($_POST['valor'])) == 0) {
            echo "Você deve colocar um valor. <br>";
        }
        $valor = filter_input(INPUT_POST, 'valor', FILTER_VALIDATE_INT);
        if ($valor == FALSE) {
            echo  "Informe um valor.<br>";
        }

         $msg = adicionarProduto($nomeProduto, $tamanho, $descricao, $preco, $quantidade);
           echo $msg;
        
        //redirecionar("formulario/index");
    } else {
        exibir("produto/formulario");
    }
    
}
function listarProdutos () {
    $dados = array();
    $dados ["produtos"] = pegarTodosProdutos();
    exibir ("produto/listar" , $dados);
}

function ver($id){
    $dados ["produto"] = pegarTodosProdutoPorId($id);
    exibir ("produto/visualizar",$dados);
}