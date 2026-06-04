# CAM

CAM is a Laravel application for managing customer records and school-related data such as generations, teachers, subjects, classes, students, and terms.

## Tech Stack

- PHP 8.3+
- Laravel 13
- MariaDB / MySQL
- PHPUnit
- Laravel Pint
- Bootstrap 5 via CDN
- Vite and Tailwind are installed, but the current customer UI uses Bootstrap CDN links from the Blade layout.

## Requirements

- PHP and Composer
- Node.js and npm, only needed when working with Vite assets
- MySQL or MariaDB
- XAMPP is fine for local development

## Setup

Install PHP dependencies:

```bash
composer install
```

Create the environment file:

```powershell
Copy-Item .env.example .env
```

Generate the Laravel app key:

```bash
php artisan key:generate
```

Configure the database in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cam
DB_USERNAME=root
DB_PASSWORD=
```

Make sure MySQL/MariaDB is running, then run migrations:

```bash
php artisan migrate
```

Start the Laravel development server:

```bash
php artisan serve
```

Open the app at:

```text
http://127.0.0.1:8000
```

## Frontend Assets

The shared Blade layout loads Bootstrap from a CDN, so no frontend build is required for the current customer pages.

If you add or modify Vite-managed assets, install npm packages and run Vite:

```bash
npm install
npm run dev
```

For production assets:

```bash
npm run build
```

## Main Routes

- `/` - welcome page
- `/customers` - customer list
- `/customers/create` - create customer
- `/customers/{customer}` - view customer
- `/customers/{customer}/edit` - edit customer

Customer routes are registered with:

```php
Route::resource('customers', CustomerController::class);
```

## Database Tables

The application currently includes migrations for:

- `customers`
- `generations`
- `teachers`
- `subjects`
- `classes`
- `students`
- `terms`
- `add_class_to_terms`
- `student_classes`
- `teacher_class_subjects`

## Useful Commands

Check routes:

```bash
php artisan route:list
```

Check migration status:

```bash
php artisan migrate:status
```

Clear cached configuration:

```bash
php artisan config:clear
```

Format modified PHP files:

```bash
vendor/bin/pint --dirty --format agent
```

Run tests:

```bash
php artisan test --compact
```

## Local MySQL Notes

If you use XAMPP, start MySQL from the XAMPP Control Panel before running migrations.

For this local setup, the app is configured to use:

```text
database: cam
username: root
password: empty
```

If your MySQL root user has a password, update `DB_PASSWORD` in `.env`, then run:

```bash
php artisan config:clear
```
