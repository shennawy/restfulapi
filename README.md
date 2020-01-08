# restfulapi
This project is an example of Restful apis using laravel.

# Installation
- Download composer from https://getcomposer.org/download/
- cd into the project's directory
- Open a new terminal and run the below commands to install & update laravel

``` sh
$ composer install
$ composer update
```

# Running the project
- Copy file .env.example to .env
- Edit .env file with database connection details
- Type the below command in a terminal from the project's directory
``` sh
$ php artisan serve
```

# Migrating DB tables
``` sh
$ php artisan migrate:fresh
```

# Seeding the database with random data
``` sh
$ php artisan db:seed
```

# Get API endpoints
``` sh
$ php artisan route:list
```
