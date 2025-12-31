INSERT INTO filmes (titulo, ano, avaliacao, datacadastro)
SELECT
  'Filme ' || gs::text AS titulo,
  (2020 + (random() * 3)::int) AS ano,
  (1 + floor(random() * 5))::int AS avaliacao,
  -- Gera datas aleatórias em 2023, distribuídas por mês
  to_timestamp(
    extract(epoch from timestamp '2023-01-01') +
    (random() * (extract(epoch from timestamp '2023-12-31') - extract(epoch from timestamp '2023-01-01')))
  )::timestamp AS datacadastro
FROM generate_series(1, 1000) AS gs;