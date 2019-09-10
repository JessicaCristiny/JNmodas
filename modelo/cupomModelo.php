<?php
function adicionarCupom ($idcupom, $nomecupom, $desconto) {
    $sql = "INSERT INTO cupom (idcupom, nomecupom, desconto) VALUES ('$idcupom', '$nomecupom', '$desconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao cadastrar o cupom' . mysqli_error($cnx));
    }
    return 'Cupom cadastrado com sucesso!';
}
function pegarTodosCupom() {
    $sql = "SELECT * FROM cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $cupom[] = $linha;
    }
    return $cupom;
}
function pegarCupomPorId($id) {
    $sql = "select * from cupom where idcupom = $id";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
}
function deletarCupom($id) {
    $sql = "DELETE FROM cupom WHERE idcupom = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao deletar a cupom' . mysqli_error($cnx));
    }
    return 'Cupom deletado com sucesso!';
}
function editarCupom($idcupom, $nomecupom, $desconto) {
    $sql = "UPDATE cupom SET idcupom ='$idcupom', nomecupom ='$nomecupom' WHERE desconto='$desconto'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao alterar cupom' . mysqli_error($cnx));
    }
    return 'Cupom alterado com sucesso!';
}
?>
