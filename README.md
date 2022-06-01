# Patinha de Anjo - Back

Ete projeto foi gerado utilizando o [Laravel](https://laravel.com).

## Informações

Este é o back-end do projeto, contendo:
- Funções para consultar/criar/editar/deletar um cliente no banco de dados de um suposto Pet Shop.
- Função para consultar os Estados cadastrados no banco de dados.
- Função para consultar os Especies cadastrados no banco de dados.
- Conexão com o Banco de Dados.

## Como utilizar?
1. Instale a versão mais recente do [Composer](https://getcomposer.org).
2. Criar a conexão com o banco de dados MySQL através do [XAMPP](https://www.apachefriends.org/pt_br/index.html) ou outro aplicativo. Obs: é necessário criar a database através do comando `create database patinha_de_anjo_db`.
3. Abra um CMD, navegue até a pasta do projeto e utilize o comando `composer install` para instalar as dependências.
4. Ainda no CMD, utilize o comando `php artisan migrate:refresh` criar as tabelas no banco de dados.
4. Ainda no CMD, utilize o comando `php artisan serve` para inicializar a API.

E por fim, para acessar a api, utilize o link `http://127.0.0.1:8000/api/clientes`.

## Membros do projeto.

RA: Nome

202202348601: Fábio Santarosa de Souza

202109045806: Hélder Augusto Gonçalves Ferreira

202108461491: Ingrid Lopes de Souza
