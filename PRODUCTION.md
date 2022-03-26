# Servimed Form

### How to install
1. Copy and configure '.env' file: `copy .env.production .env`  
2. Install composer dependencies: `composer install`
3. Generate application key: `php artisan key:generate`  
4. Migrate DB: `php artisan migrate`  
5. Import *clientes.sql* dump file to database  
6. Set permissions `chmod 775 -R storage`  
