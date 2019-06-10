
<?php
        require_once "modelo/categoriaModelo.php";
        function adicionar () {
            
            if (ehPost ()) {
                $descricao = $_POST [descricao];
    
                $msg = adicionarCategoria ($descricao);
                echo $msg;
            } else {
                //aqui nao existem dados a serem submetidos!
            }
            exibir ("categoria/formulario");
        }
        
        function listarCategoria () {
            $dados = array ();
            $dados ["categorias"] = pegarTodasCategoria();
            exibir ("categoria/listar", $dados);
        }
        
        function ver($id){
            $dados["categoria"] = pegarCategoriaPorId($id);
            exibir("categoria/visualizar", $dados);
        }
        function deletar ($id){
            $msg = deletarCategoria($id);
            redirecionar("categoria/listar");
        }
?>
    

