CREATE TABLE IF NOT EXISTS filmes (
    id SERIAL PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    ano INT NOT NULL,
    avaliacao INT CHECK (avaliacao BETWEEN 1 AND 5)
);