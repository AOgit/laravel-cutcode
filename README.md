# 🐘 Laravel from Scratch — CutCode

A practice project following the beginner-friendly **Laravel 12** course by [CutCode](https://www.youtube.com/playlist?list=PLTucyHptHtTkUbXaikXEmCWL8GradRx9I) — 7 lessons, ~3.5 hours total.

Build a fully functional website with an **admin panel** using Laravel 12.

---

## 🛠 Tech Stack

### Production
- PHP ^8.2
- Laravel Framework ^12.0
- Laravel Tinker ^2.10.1

### Development
- Faker PHP ^1.23
- Laravel Pail ^1.2.2 (log viewer)
- Laravel Pint ^1.13 (code style)
- Laravel Sail ^1.41 (Docker)
- Mockery ^1.6
- Collision ^8.6
- PHPUnit ^11.5.3

---

## 📚 Course Outline

| # | Topic |
|---|-------|
| Intro | Course overview — what you'll build |
| 1 | Introduction to Laravel |
| 2 | Database, migrations, models, factories & seeders |
| 3 | Routing |
| 4 | Blade templating engine |
| 5 | Authentication |
| 6 | Form requests & email notifications |
| 7 | Admin panel |

---

## 🚀 Getting Started

```bash
git clone https://github.com/AOgit/laravel-cutcode.git
cd laravel-cutcode

composer install
cp .env.example .env
php artisan key:generate
```

Configure your database credentials in `.env`, then run:

```bash
php artisan migrate --seed
php artisan serve
```

Open [http://localhost:8000](http://localhost:8000) in your browser.

### Run all dev services at once (server + queue + logs + Vite)

```bash
composer run dev
```

---

## 🎯 Goal

This project is aimed at beginners who want to learn:
- Laravel fundamentals from scratch
- Working with Eloquent ORM, migrations, and seeders
- Routing and Blade templating
- User authentication
- Form validation and email notifications
- Building a basic admin panel
