# Crud de Teste no Laravel 8 com livewire

Este CRUD tem como intúito o exemplo de uma simplificação dos meus conhecimentos no framework Laravel.
Toda a aplicação foi desenvolvida por cima do Laravel na sua Versão mais atual no momento 8.33.1 
Como base de meus conhecimentos no framework, coloquei aqui uma base introdutória de um sistema de postagens simples, onde um usuário faz o seu cadastro, faz login, faz o cadastro, a leitura, a edição e exclusão dos posts por ele registrados no sistema.


Para que a instalação possa ser feita, baixe o repositório com o comando

``
git clone https://github.com/adiliogobira/crud.git
``

Após baixar o repositório puxe todas as dependências do projeto com o comando

``
composer update
``

Faça a instalação das dependencias do front-end com o comando

``
npm install && npm run production
``

Logo após todas as dependências baixadas, crie um banco de dados, configure ele em seu arquivo de ambientação ".env"
Tudo configurado no .env, use o comando abaixo.

``
php artisan migrate
``

para poder acessar, pode usar o comando abaixo

``
php artisan serve
``
