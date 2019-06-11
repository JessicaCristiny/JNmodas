
<?php
        require_once "modelo/categoriaModelo.php";
        function adicionar () {
            
            if (ehPost ()) {
                $descricao =strip_tags($_POST ["descricao"]);
    
                $msg = adicionarCategoria ($descricao);
                redirecionar("categoria/listarCategoria");
            } else {
                exibir ("categoria/formulario");
            }
            
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
            redirecionar("categoria/listarCategoria");
        }
?>
    

