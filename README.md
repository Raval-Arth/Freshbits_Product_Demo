# Requirements

---

-   [php 8.0 - 8.1](https://laravel.com/docs/9.x)
-   [composer 2.x.x](https://getcomposer.org/download/)
-   [laravel 9](https://laravel.com/docs/9.x)
-   [wampserver (\*for development) ](https://wampserver.aviatechno.net/)

# setup

---

Run following commands to setup project

#### Clone repository

```bash
git clone https://github.com/Raval-Arth/Freshbits_Product_Demo.git
```

#### Dependency install

```bash
composer install
```

#### Env setup for windows

```bash
copy .env.example .env
php artisan key:generate
```

#### Env setup for linux / mac

```bash
cp .env.example .env
php artisan key:generate
```

#### Configuration (.env file)

from line no 11 to 16

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=products
DB_USERNAME=root <-- your username
DB_PASSWORD=     <-- your password
```

## Database setup

---

create database name as `products`.

```bash
php artisan migrate
```

if you want drop current database and refresh

```bash
php artisan migrate:fresh
```

### After new dependency installtion

```bash
composer dump-autoload
```

## Start server

```bash
php artisan serve
```

## Setting up

---

-   Open `http://localhost:8000/` in browser and click on registration link
-   Register user with domain `username` `email` and `password`
-   Application 
 ```bash
Login | Registration | Forgot Password
```
## Product Features
```bash
Id
UPC
Name
Price
Image
Status
```
## Features
```bash
User Authorization
Read Product | Add Product | Edit Product | Multiple Delete Product 
```

