<?php 
function adicionarCliente($nomecompleto, $email, $cpf, $datanasci, $cel, $senha){
    $sql = "insert into cliente (nomecompleto, email, cpf, datanasci, cel, senha) values ('$nomecompleto','$email', '$cpf','$datanasci', '$cel', '$senha')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) { die('erro ao cadastrar cliente' .mysqli_error($cnx));}
    return 'cliente cadastrado com sucesso!';
    
    }
function pegarTodosClientes (){
    $sql = "SELECT * FROM cliente";
    $resultado = mysqli_query(conn(),$sql);
    $clientes = array ();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $clientes[]= $linha;
    }
    return $clientes;
            
}

function pegarClientePorId ($id){
    $sql = "select * from cliente where idcliente= $id";
    $resultado = mysqli_query(conn (), $sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}
function deletarCliente($id){
    $sql = "delete from cliente where idcliente = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado){
        die('Erro ao deletar cliente'. mysqli_error($cnx));  
    }
    return 'Cliente deletado com sucesso!';
}