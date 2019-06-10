<?php
    function adicionarCategoria ($descricao) {
        $sql = "INSERT INTO categoria (descricao) VALUES ('$descricao')";
        $resultado = mysqli_query($cnx = conn(), $sql);
        if (!$resultado) { die ('categoria nao inserida' . mysqli0_error($cnx)); }
        return 'categoria cadastrada com sucesso';
    }
    function pegarTodasCategoria () {
            $sql = "SELECT * FROM categoria";
            $resultado = mysqli_query (conn(), $sql);
            $categoria = array ();
            while ($linha = mysqli_fetch_assoc($resultado)) {
                $categoria [] = $linha;
            }
            return $categoria;
    }
    function pegarCategoriaPorId($id){
        $sql = "SELECT * FROM categoria WHERE id=$id";
        $resultado = mysqli_query(conn(),$sql);
        $categoria = mysqli_fetch_assoc($resultado);
        return categoria;
    }
    function deletarCategoria ($id){
        $sql = "DELET FROM categoria WHERE id = $id";
        $resultado = mysqli_query($cnx = conn(), $sql);
        if (!$resultado) {
            die ('Erro ao deletar categoria'. mysqli_error ($cnx));
        }
        return 'Categoria deletada com sucesso!';
    }
    
