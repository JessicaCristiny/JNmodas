

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
            $dados ["categoria"] = pegarTodasCategoria();
            exibir ("categoria/listar", $dados);
        }
?>
    

