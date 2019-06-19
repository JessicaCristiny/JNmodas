<?php

function conn() {
    $cnx = mysqli_connect("localhost", "id9986824_jnmodas", "jessicanathalia", "id9986824_jnmodas");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}
