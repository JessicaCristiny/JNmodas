<?php
function adicionarEndereco( $idcliente, $cidade, $bairro, $rua, $cep, $num){
    $sql = "insert into enderecos ( idcliente, cidade, bairro, rua, cep, num ) values ('$idcliente', '$cidade','$bairro','$rua', '$cep', '$num')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) { die('erro ao cadastrar o endereço' .mysqli_error($cnx));}
    return 'endereço cadastrado com sucesso!';
    
    }
function pegarTodosEnderecos (){
    $sql = "SELECT * FROM enderecos";
    $resultado = mysqli_query(conn(),$sql);
    $enderecos = array ();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $enderecos[]= $linha;
    }
    return $enderecos;
            
}
function pegarEnderecoPorId ($id){
    $sql = "select * from enderecos where idendereco = $id";
    $resultado = mysqli_query(conn(), $sql);
    $endereco = mysqli_fetch_assoc($resultado);
    return $endereco;
}
function deletarEndereco($id){
    $sql = "delete from enderecos where idendereco = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado){
        die('Erro ao deletar endereço'. mysqli_error($cnx));  
    }
    return 'Endereço deletado com sucesso!';
}
function editarEnderecos($idendereco, $cidade, $bairro, $rua, $cep, $num){
    $sql = "update enderecos set idendereco = '$idendereco', cidade = '$cidade', bairro = '$bairro', rua = '$rua', cep = '$cep', num = '$num' where idendereco = $idendereco";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) { die('Erro ao alterar o endereço'. mysqli_error($cnx));}
    return 'Endereço alterado com sucesso!';
    
}

function pegarEnderecosPorUsuario($idUsuario) {
     $sql = "SELECT * FROM enderecos where idcliente = $idUsuario";
    $resultado = mysqli_query(conn(),$sql);
    $enderecos = array ();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $enderecos[]= $linha;
    }
    return $enderecos;
}