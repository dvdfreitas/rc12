# Instalação

## Laravel

```bash
composer create-project laravel/laravel sexto_sentido
```

## Alterar o .env

Alterar esta linha:

```php
DB_DATABASE=laravel
```

## Jetstream

```bash
composer require laravel/jetstream
php artisan jetstream:install livewire
npm install
npm run build
php artisan migrate
```

## Git

Criar o repositório no GitHub e executar os comandos dentro da pasta com o projecto:

```bash
git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/dvdfreitas/rc12.git
git push -u origin main
```

Note que o nome do repositório, neste exemplo, é rc12.

# Execução

## XAMPP 

Ligar o Apache e o MySQL.

## Servidor local para teste

```bash
php artisan serve
```

# Laravel

## Base de dados

### Criar uma nova tabela

```bash
php artisan make:model -mcs
```

Opções:
-m = migration
-c = controller
-s = seeder


### Refazer a base de dados

```bash
php artisan migrate:fresh
```

# Visual Studio Code

```
Ctrl + P - Procurar um ficheiro
```