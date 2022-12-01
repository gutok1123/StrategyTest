# Teste prático - (Comandos para rodar a aplicação)



## Escopo
Criar uma api que retorne mensagens diferentes por dias da semana
A aplicação seguiu o padrão strategy.

## Inputs Possiveis:

```json
{
"weekDay" : "Sunday",
}
```
```json
{
"weekDay" : "Monday",
}
```
```json
{
"weekDay" : "Tuesday",
}
```
```json
{
"weekDay" : "Wednesday",
}
```
```json
{
"weekDay" : "Thursday",
}
```
```json
{
"weekDay" : "Friday",
}
```

```json
{
"weekDay" : "Saturday",
}
```

## Requisitos

* "git clone https://github.com/gutok1123/StrategyTest.git" para clonar projeto.

*  mude o nome do .env.example para somente .env

* "docker-compose up -d --build" dentro da pasta que foi clonada anteriormente(Para subir o ambiente docker).

* "docker exec -it back bash"(Para entrar no container onde instalaremos todas as dependências laravel).
* "composer install" após entrar no container.

* "php artisan migrate"(Para subir as migrações para o pgdb,lembrando, sua interface o pgAdmin que esta na porta 5050) link:http//localhost:5050.

* "php artisan db:seed --class=MessagesSeeder"(Este comando serve para subri as mensagens para a tabela messages aonde temos a coluna dia da semana e mensagem.
*"./vendor/bin/phpunit" -> este comando irá rodar os testes unitários

* caso queria acessar o pgAdmin no localhost:5050 , o login é "admin@admin.com" e a senha é "postgres" ,após acessar, crie uma nova conexão  o host é "pgdb" , user "admin" e senha "postgres"

       
