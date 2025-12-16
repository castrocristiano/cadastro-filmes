CREATE TABLE public.filmes (
	id serial4 NOT NULL,
	titulo varchar(255) NOT NULL,
	ano int4 NOT NULL,
	avaliacao int4 NULL,
	CONSTRAINT filmes_avaliacao_check CHECK (((avaliacao >= 1) AND (avaliacao <= 5))),
	CONSTRAINT filmes_pkey PRIMARY KEY (id)
);