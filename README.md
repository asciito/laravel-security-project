# Security Project - Example

This is a simple project to show how to handle basic registration and login without using **started kit**. That why I don't create Controller or any other kind of model, just the basic laravel applicación.

## Run the program

Just follow this simple steps to initiate the program

1. Install all the composer dependencies

    ```php
    $ composer install
    ```

2. Install the npm packages and compile

    ```bash
    $ npm install
    ```

    Then

    ```bash
    $ npm run prod
    ```

3. Run the migrations (Don't forget to create the Database first)
    ```bash
    php artisan migrate
    ```

And that's **ALL**

### Notes

I use **Valet** to handle the server, but you can use whatever you want
