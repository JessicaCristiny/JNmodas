<?php
    function adicionarCategoria ($descricao) {
        $sql = "INSERT INTO categoria (descricao) VALUES ('$descricao')";
        $resultado = mysqli_query($cnx = conn(), $sql);
        if (!$resultado) { die ('categoria nao inserida' . mysqli0_error($cnx)); }
        return 'categoria cadastrada com sucesso';
    }

?>

