<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


# Setup Instructions
- Run **cp .env.example .env** to copy the example env file to the one used by your application
- Run **php artisan key:generate** 
- Create a database schema called **track_three**
- Run **composer install**
- Set the database username and password in the .env file to match the ones on your localhost
- Run **php artisan migrate** to create all of the DB tables used by your application
- Run **php artisan roles:seed** to create the roles in the DB used by the app. Courtesy of Allison
- Run **php artisan roles:assign** to generate 3 users and assign each of them roles. Also courtesy of Allison
- Run **php artisan serve** then go to http://localhost:8000 to start using the app
- If your feeling down run **php artisan inspire** for motivation
- If that still has you down think WWJD (what would Jeffery do)

- **Don't know where to go from here?** check out [Laracasts](https://laracasts.com/series/laravel-from-scratch-2018) and [Laravel's Documentation](https://laravel.com/) for help!


The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
