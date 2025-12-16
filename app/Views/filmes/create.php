<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Filme</title>
</head>
<body>

<h1>Cadastrar Filme</h1>

<form action="<?= site_url('filmes/salvar') ?>" method="post">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Ano:</label><br>
    <input type="number" name="ano" required><br><br>

    <label>Avaliação:</label><br>
    <input type="number" name="avaliacao" min="1" max="10" required><br><br>

    <button type="submit">Salvar</button>
</form>

<br>
<a href="<?= site_url('filmes') ?>">Voltar</a>

</body>
</html>