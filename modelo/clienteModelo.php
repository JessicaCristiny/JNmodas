<?php 
function adicionarCliente($nomecompleto, $email, $cpf, $datanasci, $cel, $senha){
    $sql = "insert into cliente (nomecompleto, email, cpf, datanasci, cel, senha) values ('$nomecompleto','$email', '$cpf','$datanasci', '$cel', '$senha')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) { die('erro ao cadastrar cliente' .mysqli_error($cnx));}
    return 'cliente cadastrado com sucesso!';
    
    }
