<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Filmes Assistidos - Home</title>
</head>
<body>
    <h1>Bem-vindo ao Cadastro de Filmes Assistidos</h1>
    <a href="<?= site_url('filmes/criar') ?>">Cadastrar novo filme</a>
    <h2>Lista de Filmes</h2>
    <?php echo view('filmes/index', ['filmes' => $filmes ?? []]); ?>
</body>
</html>