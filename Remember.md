# Commands to remember during production

---
    php artisan config:cache
Caches configuration of the server

--- 
    php artisan schema:dump --prune
Removes all the migration files and turn it into one sql 
file that can be executed to make the database.

---
    composer update
Installs or updates the packages that are currently available. 
there by creating a composer.lock file and downloads 
the required php libraries.

---
    php artisan optimize

---
    php artisan migrate
Initialises the mysql/mariadb database
