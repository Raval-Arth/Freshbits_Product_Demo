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
from line no 31 to 39
Enable Two factore authentication on your gmail account generate `app password`
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=<Your-Email-Address> <-- Your-Email-Address
MAIL_PASSWORD=<Your-Password>      <-- Your-app-password
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME=
# MAIL_FROM_NAME="${APP_NAME}"   
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
