<?php 
function adicionarCliente($nomecompleto, $email, $cpf, $datanasci, $cel, $senha){
    $sql = "insert into cliente (nomecompleto, email, cpf, datanasci, cel, senha, papel) values ('$nomecompleto','$email', '$cpf','$datanasci', '$cel', '$senha', 'usuario')";
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
function editarCliente($idcliente, $nomecompleto, $email, $cpf, $datanasci, $cel, $senha){
    $sql = "update cliente set nomecompleto = '$nomecompleto', email = '$email', cpf = '$cpf', datanasci = '$datanasci', cel = '$cel', senha = '$senha' where idcliente = $idcliente";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die ('Erro ao alterar cliente' . mysqli_error($cnx));}
    return 'Cliente alterado com sucesso!';
}
function pegarClientePorEmailSenha($email, $senha) {
    $sql = "SELECT * FROM cliente WHERE email= '$email' and senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}