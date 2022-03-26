# Servimed Form

## Setup

To run this project you will need:

- [Docker](https://www.docker.com/)

### How to install

1. Copy and configure '.env' file: `copy .env.local .env`  
2. Start Docker Compose: `docker-compose up`  
3. Connect to PHP Docker container: `docker-compose exec php sh`  
   1. Install composer dependencies: `composer install`  
   2. Generate application key: `php artisan key:generate`  
   3. Migrate DB: `php artisan migrate`  
   4. Import clientes table data  
   5. Set permissions `chmod 777 -R storage`  

### Default account  

**MySQL**  
port: 3306  
User: root  
Password: 123  
phpMyAdmin: <http://localhost/phpmyadmin>  

### References  

<https://docs.docker.com>  
<https://docs.docker.com/compose>  
<https://lumen.laravel.com/docs>  
<https://preview.keenthemes.com/metronic8/demo1/documentation/getting-started.html>  
