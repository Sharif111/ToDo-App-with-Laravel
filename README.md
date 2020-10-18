## Laravel ToDo App

This is a simple ToDo app.
This is built on Laravel Framework 7. This was built for demonstrate purpose.

## Installation


Clone the repository-

git clone https://github.com/Sharif111/ToDo-App-with-Laravel

Then cd into the folder with this command-

cd todo

Then do a composer install

composer install

Then create a environment file using this command-

cp .env.example .env

Then edit .env file with appropriate credential for your database server.

Then create a database named todo and then do a database migration using this command-

php artisan migrate

At last generate application key, which will be used for password hashing, session and cookie encryption etc.

php artisan key:generate


## Run server

Run server using this command-

php artisan serve

Then go to http://localhost:8000 from your browser and see the app.



































## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
