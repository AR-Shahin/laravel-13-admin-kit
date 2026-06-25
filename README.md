# Laravel 13 Admin Kit Starter

A Laravel 13 admin dashboard starter kit for building admin panels quickly with roles, permissions, backup tools, and data table support.

## Features

- Admin authentication and dashboard
- Role-based access control using `spatie/laravel-permission`
- Admin user management
- Category CRUD with resource controllers
- Data table support with `yajra/laravel-datatables-oracle`
- Backup utilities and file download support
- Tailwind CSS, Alpine.js, and Vite frontend tooling
- Helper utilities in `app/Helper`

## Stack

- PHP 8.3
- Laravel 13
- Tailwind CSS 3
- Vite
- Alpine.js
- Spatie Permission
- Yajra Datatables
- Spatie Backup
- Pest for tests

## Installation

```bash
git clone https://github.com/AR-Shahin/laravel-13-admin-kit.git
cd laravel-13-admin-kit
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Configure your database in `.env`, then run:

```bash
php artisan migrate --seed
npm run build
php artisan serve
```

## Local Development

Run the Vite development server while working on frontend assets:

```bash
npm run dev
```

## Admin Panel Routes

The admin panel lives under the `/admin` prefix and is protected by `auth:admin` middleware.

Common routes include:

- `/admin/dashboard`
- `/admin/roles`
- `/admin/permissions`
- `/admin/admins`
- `/admin/categories`

## Notes

- Admin routes are defined in `routes/admin/web.php`
- Admin auth routes are defined in `routes/admin/auth.php`
- Backup actions are available in `routes/admin/web.php`
- Custom helper functions load from `app/Helper/html.php` and `app/Helper/helper.php`

## Useful Commands

- `php artisan migrate`
- `php artisan migrate:fresh --seed`
- `php artisan vendor:publish`
- `npm run dev`
- `npm run build`

## License

This project is licensed under the MIT License.
