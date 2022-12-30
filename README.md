# Medexsepeti Marketplace

> Medexsepeti sample website with content retrieving from (https://www.medexsepeti.com)

This project runs with Laravel version 9

## Getting started

Assuming you've already installed on your machine: PHP (>= 8.1), [Laravel](https://laravel.com), [Composer](https://getcomposer.org) and [Node.js](https://nodejs.org).

``` bash
# install dependencies
composer install
npm install

# create .env file and update it with your db data 
cp .env.example .env

#generate the application key
php artisan key:generate

# build CSS and JS assets
npm run build

# run migration & seed
php artisan migrate
php artisan db:seed

# run storage link command
php artisan storage:link


```

Then launch the server:

``` bash
php artisan serve
```

The project is now up and running! Access it at http://localhost:8000
