# Quick Installation

## 1. Clone the repository

```bash
git clone https://github.com/oktatapi/bicycles_api_lar.git
```

## 2. Install dependencies

```bash
composer install
```

## 3. Copy .env file

```bash
cp .env.example .env
```

## 4. Generate application key

```bash
php artisan key:generate
```

## 5. Configure database

Edit `.env` file and set your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bicycles_api_lar
DB_USERNAME=root
DB_PASSWORD=
```

## 6. Run migrations

```bash
php artisan migrate
```

## 7. Seed the database

```bash
php artisan db:seed
```

## 8. Start the server

```bash
php artisan serve
```

The API will be available at `http://127.0.0.1:8000`
