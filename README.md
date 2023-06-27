# Bookstore API <img src="https://d2v9ipibika81v.cloudfront.net/uploads/sites/16/US_Flag_Color_72DPI_750x450.jpg" style="width: 50px; height: 30px" title="English text">

This project is the implementation of a test API with endpoints that perform CRUD operations, login with token generation and logout, for a sample bookstore.

Were used:
<pre>
<a href="https://laravel.com/docs/9.x" target="_blank">Laravel 9.52.9</a>
<a href="https://dev.mysql.com/doc/relnotes/mysql/8.0/en/news-8-0-32.html" target="_blank">MySQL 8.0.32</a>
<a href="https://www.php.net/releases/8.2/en.php" target="_blank">PHP 8.2.7</a>
</pre>

The project was created using Docker containers. In this way, it is necessary that you have installed Docker in your environment. More details can be found in the <a href="https://docs.docker.com/get-docker/" target="_blank">Docker documentation</a>.

It is necessary that the Composer dependency manager is also installed before starting. More details can be found on the <a href="https://getcomposer.org/" target="_blank">Composer</a> website.

1) Clone this repository in your environment and enter the "app" folder:

<pre>
git clone git@github.com:sharpeidev/bookstore-api.git
cd app
</pre>

2) Install Laravel dependencies:

<pre>composer install</pre>

3) Assuming you are in a Linux environment, change the permissions of the "storage" and "bootstrap/cache" folders:

<pre>sudo chmod -R +777 storage bootstrap/cache</pre>

4) Up the Docker containers:

<pre>docker compose up -d</pre>

5) Enter the bash terminal of the "app" container to run the Laravel migrations. Once executed, exit the terminal:

<pre>
docker exec -it app bash
php artisan migrate
exit
</pre>

6) Create a test user by running the "UserSeeder":

<pre>php artisan db:seed --class=UserSeeder</pre>

The created user data are:

<pre>
User: <strong>test.user@example.com</strong>
Password: <strong>pass123</strong>
</pre>

7) In your environment, you should be able to access the API login endpoint through API client software such as Postman. Send the login data in JSON to the following endpoint:

<pre>
{
     "email": "test.user@example.com",
     "password": "pass123"
}

POST | http://localhost/api/login
</pre>

This endpoint will return a JSON with the token that will be used to access all other endpoints, in the format:

<pre>
{
     "access_token": "YtmaOqJFlG43lrzflhf0EWR7QS0nMxBA4nEoxNWo4Z",
     "token_type": "Bearer"
}
</pre>

8) The existing endpoints are:

<pre>
POST | http://localhost/api/logout
GET | http://localhost/api/books
POST | http://localhost/api/books
GET | http://localhost/api/books/{id}
PUT | http://localhost/api/books/{id}
DEL | http://localhost/api/books/{id}
</pre>

All these endpoints need the Bearer token to be accessed.

# Book store API <img src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" style="width: 50px; height: 35px" title="Texto em Português">

Este projeto é a implementação de uma API de teste com endpoints que executam operações de CRUD, login com geração de token e logout, para uma livraria de exemplo.

Foram utilizados:
<pre>
<a href="https://laravel.com/docs/9.x" target="_blank">Laravel 9.52.9</a>
<a href="https://dev.mysql.com/doc/relnotes/mysql/8.0/en/news-8-0-32.html" target="_blank">MySQL 8.0.32</a>
<a href="https://www.php.net/releases/8.2/pt_BR.php" target="_blank">PHP 8.2.7</a>
</pre>

O projeto foi criado usando containers Docker. Desta forma, é necessário que você tenha instalado o Docker em seu ambiente. Mais detalhes podem ser encontrados na <a href="https://docs.docker.com/get-docker/" target="_blank">documentação do Docker</a>.

É necessário que o gerenciador de dependências Composer também esteja instalado antes de começar.  Mais detalhes podem ser encontrados no site do <a href="https://getcomposer.org/" target="_blank"> Composer</a>.

1) Faça o clone deste repositório em seu ambiente e entre na pasta "app":

<pre>
git clone git@github.com:sharpeidev/bookstore-api.git
cd app
</pre> 

2) Instale as dependências do Laravel:

<pre>composer install</pre>

3) Considerando que você esteja num ambiente Linux, altere as permissões das pastas "storage" e "bootstrap/cache":

<pre>sudo chmod -R +777 storage bootstrap/cache</pre>

4) Suba os containers Docker:

<pre>docker compose up -d</pre>

5) Entre no terminal bash do container "app" para executar as migrations do Laravel. Depois de executadas, sai do terminal:

<pre>
docker exec -it app bash
php artisan migrate
exit
</pre>

6) Crie um usuário de deste executando a "UserSeeder":

<pre>php artisan db:seed --class=UserSeeder</pre>

Os dados do usuário criado são:

<pre>
Usuário: <strong>test.user@example.com</strong>
Senha: <strong>pass123</strong>
</pre>

7) Em seu ambiente, você conseguira acessar o endpoint de login da API através de um software cliente de API como o Postman. Envie num JSON os dados de login para o seguinte endpoint:

<pre>
{
    "email": "test.user@example.com",
    "password": "pass123"
}

POST | http://localhost/api/login
</pre>

Este endpoint retornará um JSON com o token que servirá para acessar todos os outros endpoints, no formato:

<pre>
{
    "access_token": "YtmaOqJFlG43lrzflhf0EWR7QS0nMxBA4nEoxNWo4Z",
    "token_type": "Bearer"
}
</pre>

8) Os endpoints existentes são:

<pre>
POST | http://localhost/api/logout
GET  | http://localhost/api/books
POST | http://localhost/api/books
GET  | http://localhost/api/books/{id}
PUT  | http://localhost/api/books/{id}
DEL  | http://localhost/api/books/{id}
</pre>

Todos estes endpoints precisam do Bearer token para serem acessados.
