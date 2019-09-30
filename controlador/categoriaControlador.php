
<?php
        require_once "modelo/categoriaModelo.php";
        /** adm */
        function adicionar () {
            
            if (ehPost ()) {
                $descricao =strip_tags($_POST ["descricao"]);
    
                $msg = adicionarCategoria ($descricao);
                redirecionar("categoria/listarCategoria");
            } else {
                exibir ("categoria/formulario");
            }
            
        }
        /** anon */
        function listarCategoria () {
            $dados = array ();
            $dados ["categorias"] = pegarTodasCategoria();
            exibir ("categoria/listar", $dados);
        }
        /** anon */
        function ver($id){
            $dados["categoria"] = pegarCategoriaPorId($id);
            exibir("categoria/visualizar", $dados);
        }
        /** adm */
        function deletar ($id){
            $msg = deletarCategoria($id);
            redirecionar("categoria/listarCategoria");
        }
        /** adm */
        function editar ($id) {
            if (ehPost()) {
                $descricao = $_POST ["descricao"];
                $idcategoria = $_POST ["idcategoria"];
            editarCategoria ($id, $descricao);
            redirecionar ("categoria/listar");
            } else {
                $dados ["categoria"] = pegarCategoriaPorId ($id);
                exibir ("categoria/formulario", $dados);
            }    
        }
?>
    


