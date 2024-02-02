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

[Laravel Directory Structure](https://laravel.com/docs/10.x/structure) - Full directory structure documentation