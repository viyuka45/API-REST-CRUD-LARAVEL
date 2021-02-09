1- Requisitos:

PHP 7.x,

Compositor

2-Instalação:

Siga esses passos:

Clone ou baixe este projeto,

Abra a linha de comando e vá para o diretório do projeto,

-composer install

Crie banco (s) de dados para o seu projeto:

Crie um arquivo .env baseado em .env.example e configure seu projeto

-php artisan key:generate

-php artisan load-template

Migrando os arquivos:

-php artisan migrate

Execute o servidor: 

-php artisan serve
