<?php 
    require_once "modelo/ProdutoModelo.php";
    require_once "modelo/categoriaModelo.php";
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
        $descricao =  strip_tags( $_POST ["descricao"]);
        $valor = strip_tags($_POST ["valor"]);
        
    //nomeproduto
        if (strlen(trim($_POST['nome'])) == 0) {
            echo "Você deve inserir seu nome. <br>";
        }
 
        if(is_string($nome)){

        }else{
            echo 'Não é do tipo String.';
        }   
        
    //descrição
         if (strlen(trim($_POST['descricao'])) == 0) {
            echo "Você deve colocar uma descrição. <br>";
        }
         if(is_string($descricao)){

        }else{
            echo 'Não é do tipo String.';
        }
    //valor
         if (strlen(trim($_POST['valor'])) == 0) {
            echo "Você deve colocar um valor. <br>";
        }
         if(is_string($descricao)){

        }else{
            echo 'Não é do tipo String.';
        }
      
         $msg = adicionarProduto($nome, $descricao, $valor);
         echo $msg;
         //redirecionar("produto/listarProdutos");
        
        //redirecionar("formulario/index");
    } else {
        $dados = array ();
        $dados ["categorias"] = pegarTodasCategoria();
        exibir("produto/formulario", $dados);
    }
    
}
function listarProdutos () {
    $dados = array();
    $dados ["produtos"] = pegarTodosProdutos();
    exibir ("produto/listar" , $dados);
}

function ver($id){
    $dados ["produto"] = pegarProdutoPorId($id);
    exibir ("produto/visualizar", $dados);
}
function deletar ($id) {
    $msg = deletarProduto($id);
    redirecionar("produto/listarProdutos");
}
function editar ($id) {
    if (ehPost()) {
        $nome = $_POST ["nome"];
        $descricao = $_POST ["descricao"];
        $valor = $_POST ["valor"];
        $categoria = $_POST ["categoria"];
        editarCliente ($idProduto, $nome, $descricao, $valor, $categoria);
        redirecionar ("produto/listar");
        } else {
            $dados ["produto"] = pegarProdutoPorId($id);
            exibir("produto/formulario", $dados);
            }
}  
