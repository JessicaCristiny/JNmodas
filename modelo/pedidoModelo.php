<?php
function salvarPedidos ($descricao){
    $sql = "INSERT INTO pedido (nome, descricao, valor, categoria, estoqueMinimo, estoqueMaximo) VALUES ('$nome', '$descricao', '$valor', '$categoria', '$estoqueMinimo', '$estoqueMaximo')";
        $cnx = conn();
        $resultado = mysqli_query($cnx, $sql);
        if (!$resultado) { die ('Erro ao cadastrar produto' . mysqli_error($cnx)); }
        return 'Produto cadastrado com sucesso!';
}