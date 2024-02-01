To create a new Laravel project use the command: 
```sh
composer create-project laravel/laravel example-app
```
*Note: Make sure that you have both [php](https://www.php.net/downloads.php) and [composer](https://getcomposer.org/download/) installed*
---

File structure

1. app (Folder) - Most of the app logic lives.
    - Http (Sub-Folder)
        - Interacts with Http request [POST, GET, PUT, PATCH, and DELETE].
    - Models (Sub-Folder)
        - Holds the model files for app logics

2. config (Folder) - Application configurations
    - Holds basic configuration like timezone, default values, etc.

3. database (Folder) - Holds database related files
    - migrations (Sub-Folder)
        - Holds database tables and schemas 

4. public (Folder) - All the publicly available/accesible files are located for the web server

5. resources (Folder) - Holds development resources [HTML, CSS, JS, Views, etc.] 

6. routes (Folder) - All the routes that the web app can navigate to

7. storage (Folder) - Upload, download, and application logs

8. tests (Folder) - For unit testing the web app

9. vendor (Folder) - Composer managed folder for dependencies

10. .env (File) - Holds various default variables for the app

---

MVC - Model View Controller a design pattern that follows the pattern where a user interact with the controller, then the controller send data to the model to manipulate, and the model updates the view to which the user can see it visually.

To start a laravel server:
```sh
php artisan serve
```
To create a controller with command:
```sh
php artisan make:controller NameOfController
```

---

*Note: This directory structure follows Laravel conventions and is designed to provide a clear and organized layout for different aspects of a Laravel application.*

[Laravel Directory Structure](https://laravel.com/docs/10.x/structure) - Full directory structure documentation
