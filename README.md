# Cardápio — Sistemas Web

> Aplicação Laravel de cardápio digital, desenvolvida na disciplina de Sistemas Web (CSI477).
> A Laravel digital menu application, built for the Web Systems course (CSI477).

---

## 🇧🇷 Português

### Sobre

Sistema de **cardápio digital** construído com **Laravel**, como trabalho da disciplina de Sistemas Web. A aplicação cobre o ciclo CRUD completo dos itens do cardápio, com views Blade, rotas, migrations e persistência em banco relacional.

### Estrutura

```
cardapio_laravel/cardapio/
├── app/            Models, controllers e regras de negócio
├── routes/         Definição das rotas web
├── resources/      Views Blade e assets
├── database/       Migrations e seeders
├── config/         Configuração da aplicação
├── public/         Raiz pública
└── tests/          Testes (PHPUnit)
```

### Requisitos

- PHP 8.1+
- Composer
- Node.js e npm
- Banco de dados (MySQL, PostgreSQL ou SQLite)

### Instalação

```bash
cd cardapio_laravel/cardapio
composer install
npm install

cp .env.example .env
php artisan key:generate
php artisan migrate --seed

php artisan serve
```

A aplicação sobe em `http://localhost:8000`.

### Testes

```bash
php artisan test
```

---

## 🇺🇸 English

### About

A **digital menu** system built with **Laravel** as coursework for the Web Systems class. The application covers the full CRUD cycle for menu items, with Blade views, routes, migrations, and relational database persistence.

### Layout

```
cardapio_laravel/cardapio/
├── app/            Models, controllers, and business rules
├── routes/         Web route definitions
├── resources/      Blade views and assets
├── database/       Migrations and seeders
├── config/         Application configuration
├── public/         Public web root
└── tests/          Tests (PHPUnit)
```

### Requirements

- PHP 8.1+
- Composer
- Node.js and npm
- A database (MySQL, PostgreSQL, or SQLite)

### Setup

```bash
cd cardapio_laravel/cardapio
composer install
npm install

cp .env.example .env
php artisan key:generate
php artisan migrate --seed

php artisan serve
```

The app runs at `http://localhost:8000`.

### Tests

```bash
php artisan test
```
