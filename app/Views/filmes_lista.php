<a href="/filmes/criar">Novo Filme</a>
<table border="1">
<tr><th>Título</th><th>Ano</th><th>Avaliação</th><th>Data</th></tr>
<?php foreach ($filmes as $f): ?>
<tr>
<td><?= esc($f['titulo']) ?></td>
<td><?= esc($f['ano']) ?></td>
<td><?= esc($f['avaliacao']) ?></td>
<td><?= esc($f['datacadastro']) ?></td>
</tr>
<?php endforeach; ?>
</table>
