<?php
function cadastro(){
    if (ehPost ()){
        $nome = $_POST ["nome"];
        $email = $_POST ["email"];
        $cpf = $_POST ["cpf"];
        $data = $_POST ["data"];
        $cel = $_POST ["cel"];
        $senha = $_POST ["senha"];
        
        echo $nome ."<br>";
        echo $email ."<br>";
        echo $cpf ."<br>";
        echo $cel ."<br>";
        echo $senha ."<br>";
        
        
        //redirecionar("formulario/index");
    } else {
        exibir("cliente/cadastro");
    }
    
}