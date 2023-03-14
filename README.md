<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Hotel Booking Assignment (Laravel)

## Overview

The purpose of this assignment is to demonstrate:

1. Ability to build an interactive and database-driven web applications using a laravel framework
2. The implementation of the model-view-controller (MVC) software architecture.
3. Working with the Laravel routes, controllers, SQL database (for CRUD operations) and models.
4. Storing and manipulating Laravel states.
5. Building a web application with user authentication and authorization using cookies, session and
role-based access control (RBAC).
6. The implementation of User authorization using gates or policies.
7. HTML and CSS ability.
8. Persistance storage knowledge.
9. Performing operations using model (Eloquent ORM) approach.


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


### Prerequisites

In order to run the provided solution the following software will need to be installed:

- A code editor (We recommend VS Code [here.](https://code.visualstudio.com/)).
- A web browser (We recommend Google Chrome [here.](https://www.google.com/chrome/?brand=YTUH&gclid=EAIaIQobChMIir3Aj7Cy_QIVVxwrCh2bbA69EAAYASAAEgJtsfD_BwE&gclsrc=aw.ds)).

### Setup

1. Fork and clone the repository.
2. Open the repository folder and install the dependencies using `composer install`.
3. Set DB configurations in .env file.
4. Run `php artisan migrate` to create MySQL database.
5. Run `php artisan db:seed --class=AuthSeeder` to populate MySQL database for authenticate.
6. Run the development server using `php artisan serve`.
7. Create a new branch (based on your function name) before making changes.
​
The repository contains a resources directory inside the root folder with scripts and view files; this should be the starting point for the application. Please feel free to create more views to structure the app in a logical manner.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Laravel CLI Commands

- php artisan serve = Starts development server
- php artisan make:migration create_test_table = Generates automated script to create a database table 
- php artisan migrate --path=path/to/migration/file = Runs automated script to create database table
- php artisan make:seeder TestSeeder = Generates automated script for data seeding 
- php artisan db:seed --class=TestSeeder = Runs automated script to seed database table

## Conclusion

This project was built for the purpose of fulfilling the UECS3294 Advanced Web Application Development requirements. Contributions are welcomed :)