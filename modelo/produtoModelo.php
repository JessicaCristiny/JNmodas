
<?php
    function adicionarProduto ($nome, $descricao, $valor, $categoria, $estoqueMinimo, $estoqueMaximo, $imagem) {
        $sql = "INSERT INTO produto (nome, descricaoPRODUTO, valor, categoria, estoqueMinimo, estoqueMaximo, imagem) VALUES ('$nome', '$descricao', '$valor', '$categoria', '$estoqueMinimo', '$estoqueMaximo', '$imagem')";
        $cnx = conn();
        $resultado = mysqli_query($cnx, $sql);
        if (!$resultado) { die ('Erro ao cadastrar produto' . mysqli_error($cnx)); }
        return 'Produto cadastrado com sucesso!';
    }
function pegarTodosProdutos () {
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query (conn(),$sql);
    $produtos = array ();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $produtos [] = $linha;
    }
    return $produtos;
}
//ver
function pegarProdutoPorId ($id){
    $sql ="SELECT * FROM produto WHERE idProduto = $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}
function deletarProduto ($id) {
  $sql = "DELETE FROM produto WHERE idProduto = $id";
  $resultado = mysqli_query($cnx =conn(), $sql);
  if (!$resultado) {
      die ('Erro ao deletar cliente' . mysqli_error($cnx)); 
  }
  return 'Produto deletado com sucesso!';
}
function editarProduto($idProduto, $nome, $descricao, $valor, $categoria) {
    $sql = "UPDATE produto SET nome = '$nome', descricaoPRODUTO = '$descricao' , valor = '$valor', categoria = '$categoria' WHERE idProduto = $idProduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx));}
    return 'Produto alterado com sucesso!';
}

    
