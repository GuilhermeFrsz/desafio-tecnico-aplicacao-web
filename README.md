# Controle de Usuários

Aplicação web simples para gerenciamento de usuários (CRUD), desenvolvida como desafio técnico para vaga de estágio em Desenvolvimento Web.

## Funcionalidades
- Listagem de usuários
- Cadastro de usuário
- Edição de usuário
- Exclusão de usuário

## Tecnologias utilizadas
- PHP (Laravel)
- HTML
- CSS
- JavaScript
- jQuery (AJAX)
- MySQL

## Requisitos
- PHP 8+
- Composer
- MySQL
- Node.js (opcional, caso queira ajustar assets)

## Como rodar o projeto
1. Clone o repositório:
    git clone https://github.com/seu-usuario/seu-repositorio.git

2. Acesse a pasta do projeto:
    cd controle-usuario

3. Instale as dependências do PHP:
    composer install

4. Crie o arquivo .env:
    cp .env.example .env

5. Configure o banco de dados no arquivo .env:
    DB_DATABASE=nome_do_banco
    DB_USERNAME=usuario
    DB_PASSWORD=senha

6. Gere a key da aplicação:
    php artisan key:generate

7. Rode as migrations:
    php artisan migrate

8. Inicie o servidor:
    php artisan serve
9. Acesse no navegador:
    http://127.0.0.1:8000/users