
<?php
    function adicionarProduto ($nomeProduto, $tamanho, $descricao, $preco, $quantidade) {
        $sql = "INSERT INTO produto (nomeProduto, tamanho, descricao, preco, qauntidade) VALUES ('$nomeProduto', '$tamanho', '$descricao', '$preco', '$quantidade')";
        $resultado = mysqli_query($cnx = conn(), $sql);
        if (!$resultado) { die ('Erro ao cadastrar produto' . mysqli0_error($cnx)); }
        return 'cliente cadastrado com sucesso!';
    }
function pegarTodosProdutos () {
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query (conn(),$sql);
    $produto = array ();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $produtos [] = $linha;
        return $produtos;
    }
}

function pegarProdutoPorId ($id){
    $sql ="SELECT * FROM produto WHERE id = $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}
function deletarProduto ($id) {
  $sql = "DELETE FROM produtos WHERE id = $id";
  $resultado = mysqli_query($cnx =conn(), $sql);
  if (!$resultado) {
      die ('Erro ao deletar cliente' . mysqli_error($cnx)); 
  }
  return 'Produto deletado com sucesso!';
}

