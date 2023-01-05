
![Screenshot from 2023-01-05 14-48-36](https://user-images.githubusercontent.com/80633456/210728750-3ea08f9e-9777-4cf9-8f17-0079af7f3a4a.png)
![Screenshot from 2023-01-05 14-48-46](https://user-images.githubusercontent.com/80633456/210728806-b0164164-9b75-46f5-8638-4a107e1cdcac.png)


Clone the repository

    git clone https://github.com/array-programming/web-laravel.git

Switch to the repo folder

    cd web-laravel

Install all the dependencies using composer

    composer install

Install all npm dependencies

    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve
