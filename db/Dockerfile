FROM postgres:15

# Garante que o diretório existe e tem permissões corretas
RUN mkdir -p /docker-entrypoint-initdb.d \
    && chmod 755 /docker-entrypoint-initdb.d

# Copia o init.sql para dentro da imagem
COPY init/init.sql /docker-entrypoint-initdb.d/init.sql

# Garante leitura
RUN chmod 644 /docker-entrypoint-initdb.d/init.sql
