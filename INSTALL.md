# Developer Install Readme

## Install Laravel Sail

Following https://laravel.com/docs/9.x/sail start to containerize app

```shell
composer require laravel/sail --dev
php artisan sail:install
```

Using alias in Makefile start docker container and log-in container

```shell
make upd
make shell
```

## Generate migrations and run seeders

```shell
php artisan make:migration create_users_table
php artisan make:migration create_posts_table
php artisan make:factory PostFactory
php artisan migrate:fresh --seed
```

## Lint code

```shell
composer php-cs-fixer
```