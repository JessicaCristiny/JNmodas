<div class="meio">
    <form action="" method="POST">
        <select name="forma">
            <option value="default">Selecione uma Forma de Pagamento</option>
            <?php foreach ($formaPagamentos as $formaPagamento): ?>
                <option value="<?= $formaPagamento["idFormadePagamento"] ?>"><?= $formaPagamento["descricao"] ?></option>
            <?php endforeach; ?>
        </select>

        <select name="endereco">
            <option value="default">Selecione um endereço</option>
            <?php foreach ($enderecos as $endereco): ?>
                <option value="<?= $endereco["idendereco"] ?>"><?= $endereco["rua"] ?></option>
            <?php endforeach; ?>
        </select>
</div>
