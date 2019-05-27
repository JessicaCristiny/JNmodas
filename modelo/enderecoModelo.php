<?php
function adicionarEndereco($cidade, $bairro, $endereco, $rua, $cep, $num){
    $sql = "insert into enderecos (cidade, bairro, endereco, rua, cep, num) values ('$cidade','$bairro', '$endereco','$rua', '$cep', '$num')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) { die('erro ao cadastrar o endereço' .mysqli_error($cnx));}
    return 'endereço cadastrado com sucesso!';
    
    }
function pegarTodosEnderecos (){
    $sql = "SELECT * FROM enderecos";
    $resultado = mysqli_query(conn(),$sql);
    $clientes = array ();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $enderecos[]= $linha;
    }
    return $enderecos;
            
}