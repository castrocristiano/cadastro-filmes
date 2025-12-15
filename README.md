# 🎬 Cadastro de Filmes Assistidos

Este projeto consiste em uma aplicação web desenvolvida em **PHP**,
utilizando o **framework CodeIgniter 4** e banco de dados
**PostgreSQL**, cujo objetivo é permitir o cadastro e a organização de
filmes assistidos por um fã de cinema.

A aplicação foi desenvolvida como parte de um trabalho acadêmico,
adotando boas práticas de desenvolvimento web e conteinerização com
**Podman**.

------------------------------------------------------------------------

## 🛠️ Tecnologias Utilizadas

-   PHP 8.2\
-   CodeIgniter 4\
-   PostgreSQL 15\
-   Apache 2.4\
-   Podman\
-   Podman Compose\
-   pgAdmin 4

------------------------------------------------------------------------

## 📁 Estrutura do Projeto

    cadastro-filmes/
    ├── app/
    ├── public/
    ├── writable/
    ├── Dockerfile
    ├── docker-compose.yml
    └── README.md

------------------------------------------------------------------------

## ⚙️ Pré-requisitos

-   Podman (versão 4 ou superior)
-   Podman Compose
-   Acesso à internet

------------------------------------------------------------------------

## 🐧 Instalação do Podman

### Fedora / RHEL

``` bash
sudo dnf install -y podman podman-compose
```

### Ubuntu / Debian

``` bash
sudo apt update
sudo apt install -y podman podman-compose
```

------------------------------------------------------------------------

## 🚀 Subindo o Ambiente

### 1️⃣ Clonar o repositório

``` bash
git clone https://github.com/seu-usuario/cadastro-filmes.git
cd cadastro-filmes
```

### 2️⃣ Build da imagem

``` bash
podman build -t filmes_php .
podman tag filmes_php localhost/filmes_php:latest
```

### 3️⃣ Subir os containers

``` bash
podman-compose up -d
```

------------------------------------------------------------------------

## 🌐 Acessos

-   Aplicação: http://localhost:8080\
-   pgAdmin: http://localhost:8081

Usuário: admin@admin.com\
Senha: admin

------------------------------------------------------------------------

## 📦 Instalação do CodeIgniter

``` bash
podman exec -it cadastro-filmes_web_1 bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
composer create-project codeigniter4/appstarter .
chmod -R 777 writable
exit
podman-compose restart web
```

------------------------------------------------------------------------

## 🗄️ Banco de Dados

-   Banco: cinema\
-   Usuário: app_user\
-   Senha: app_pass\
-   Host: db\
-   Porta: 5432

------------------------------------------------------------------------

## 📚 Contexto Acadêmico

Projeto desenvolvido na disciplina **Imersão Profissional: Implementação
de uma Aplicação**.

------------------------------------------------------------------------

## 👤 Autor

**Cristiano da Silva Castro**\
Tutor(a): **Simone Cristina Aléssio**

------------------------------------------------------------------------

## ✅ Licença

Projeto desenvolvido para fins acadêmicos.
