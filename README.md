# Forking

- Ir ao projeto: (no Github)
- No canto superior direito clicar em Fork
- Por baixo de "owner" escolher o nosso utilizador
- Selecionar o "Copy the default branch"
- Clicar em Create Fork.

## Clonar o fork

- Em Code copiar o endereco do repositório.
- git clone https://github.com/YOUR-USERNAME/aeg_rc
- cd aeg_rc


---

```bash
git branch BRANCH-NAME
git checkout BRANCH-NAME
```

---

https://github.com/<your_username>/aeg_rc. You'll see a banner indicating that your branch is one commit ahead of dvdfreitas:main. Click Contribute and then Open a pull request.


GitHub will bring you to a page that shows the differences between your fork and the dvdfreitas/aeg_rc repository. Click Create pull request.


- git remote -v
- git remote add upstream https://github.com/ORIGINAL_OWNER/aeg_rc
- git remote -v


Mais informações em:
https://docs.github.com/en/get-started/quickstart/contributing-to-projects


# Sofware necessário

- Git
- NPM
- Composer
- Visual Studio Code
- XAMPP (PHP, MySQL, Apache)

## XAMPP

## Git

É um sistema de controlo de versões que permite colaborar e manter um histórico de alterações.

Permite: 
- Tracking code changes
- Tracking who made changes
- Coding collaboration

https://git-scm.com/downloads

Como verificar se o GIT está bem instalado:

```bash
git --version
```

### Informação adicional

Recomenda-se o segiuinte tutorial:

- https://www.w3schools.com/git/


## PHP

Como verificar se o PHP está bem instalado:

```bash
php -v
```

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

# Criação e validação de um formulário

Cross-site request forgery

# Erros

Base table or view already exists: 1050 Table 'sessions' already exists 

```bash
php artisan migrate:reset 
```

Step 1

Copy
php artisan migrate:reset
Step 2

Go to your database using PHPmyadmin (or similar) and delete all remaining tables - including the migration table.

Step 3

Copy
php artisan migrate

---

Verificar se a tabela "sessions" não estão duplicados.

# Criação de componentes

```bash
php artisan make:component forms.input_text
```

# Utilização de "modelos"

Usar como base
<x-guestLayout>
    ...

    <h1>Página da Escola</h1>

    A melhor página da Internet!

    ...
</x-guestLayout>



## TailwindCSS 

Executar

```bash
npm run dev
```

# Exercícios

1. Criar um componente para o menu de navegação.

*Exemplo*

```bash
php artisan make:component menu
```

2. Acrescentar o componente no Guest Layout (guest.blade.php)

Colocar <x-menu> como, por exemplo em:

```html
<body>
    <x-menu/>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    @livewireScripts
</body>
```

2. Criar um componente para o rodapé e acrescentar no Guest Layout.


3. Utilizar o TailwindCSS para melhorar o aspeto da página.

[TailwindCSS](https://https://tailwindcss.com/)



https://tailwindcss.com/

# Tutoriais

## Markdown

https://www.markdownguide.org/cheat-sheet/

# Trabalhos

Document
Project
Student
Teacher
Award
SchoolClass
Course
Subject
Story
Quote
Hero
Category
Quote
Event
School

## Criação do modelo e da base de dados


