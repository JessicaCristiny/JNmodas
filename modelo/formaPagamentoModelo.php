<?php
 function adicionarFormaPagamento ($descricao){
    $sql = "insert into formadepagamento (descricao) values ('$descricao')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) { die('erro ao cadastrar forma de pagamento' .mysqli_error($cnx));}
    return 'forma de pagamento cadastrada com sucesso!';
 }
function pegarTodasFormaPagamento(){
	$sql = "SELECT * FROM formadepagamento";
	$resultado = mysqli_query(conn(), $sql);
	$formaPagamento = array();
	while ($linha = mysqli_fetch_assoc($resultado)){
		$formaPagamento[]= $linha;
	}
	return $formaPagamento;
}
function pegarFormaPagamentoPorId ($id){
    $sql = "select *from formadepagamento where idFormadePagamento = $id";
    $resultado = mysqli_query(conn (), $sql);
    $formaPagamento = mysqli_fetch_assoc($resultado);
    return $formaPagamento;
}
function deletarFormaPagamento ($idFormdadePagamento){
    $sql = "delete from formadepagamento where idFormadePagamento = $idFormdadePagamento";
    $resultado = mysqli_query(conn(), $sql);
    if(!resultado){
        die('Erro ao deletar a forma de pagamento' . mysqli_error($cnx));
    }
}
function editarFormaPagamento ($idFormdadePagamento, $descricao){
    $sql = "update formadepagamento set descricao = '$descricao' where idFormadePagamento = $idFormdadePagamento";
     $resultado = mysqli_query(conn(), $sql);
    if(!resultado){
        die('Erro ao editar a forma de pagamento' . mysqli_error($cnx));
    }
}
