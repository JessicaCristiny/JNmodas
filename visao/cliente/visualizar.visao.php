
        <h1> Ver detalhes do Cliente</h1>
        <p>Id: <?=$cliente['idcliente']?></p>
        <p>Nome: <?=$cliente['nomecompleto']?></p>
        <p>Email: <?=$cliente['email']?></p>
        <p>CPF: <?=$cliente['cpf']?></p>
        <p>Celular: <?=$cliente['cel']?></p>
        <?php require_once "visao/endereco/listarE.visao.php"; ?>

