# API-REST-CRUD-LARAVEL
Um sistema de biblioteca. 

#Instalação

1- Clone este repositório
$ git clone https://github.com/viyuka45/API-REST-CRUD-LARAVEL.git
$ cd/API-REST-CRUD-LARAVEL

2- instale as dependências usando composer
$ composer install

3- Crie e configure o arquivo .env
Renomeie .env.example para.env e configure seu banco de dados
$ php artisan key:generate
Coloque a chave na pasta .env 

4-Migrar e inserir registros
$ php artisan migrate
$ php artisan tinker
$ factory(App\Customer::class, 100)->create();



