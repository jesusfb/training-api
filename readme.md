**Installation**

1. Make sure you have php 7.2 or higher (check with `php -v`), composer, node, npm installed
2. Clone the project repo to your local device
3. Copy the .env.example file and rename it .env
4. Run `composer install`
5. Run `php artisan key:generate`
6. Create a database in mysql
7. Run `php artisan migrate --seed`
8. Run `php artisan serve`, hosted at: http://127.0.0.1:8000
