<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Filmes Assistidos</title>
</head>
<body>
    <h1>Filmes Assistidos</h1>
    <a href="<?= site_url('filmes/criar') ?>">Cadastrar novo filme</a>
    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>Título</th>
                <th>Ano</th>
                <th>Avaliação</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($filmes)): ?>
                <?php foreach ($filmes as $filme): ?>
                    <tr>
                        <td><?= esc($filme['titulo']) ?></td>
                        <td><?= esc($filme['ano']) ?></td>
                        <td><?= esc($filme['avaliacao']) ?></td>
                        <td><?= esc($filme['datacadastro']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">Nenhum filme cadastrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <br>
    <a href="<?= site_url('/') ?>">Voltar</a>
</body>
</html>