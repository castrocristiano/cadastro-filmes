<form method="post" action="<?= site_url('filmes/salvar') ?>">
    <input type="text" name="titulo" placeholder="Título" required>
    <input type="number" name="ano" placeholder="Ano" required>
    <select name="avaliacao" required>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor; ?>
    </select>
    <button type="submit">Salvar</button>
</form>