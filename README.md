# Single Api
An api using laravel and sanctum

##About this application

This application was created using Laravel and Sanctum and facilitates the consumption of
APIs making a simple DTO for data delivery.

#Installation

After downloading this application to your local repository,
inside the application's root folder you can open your terminal
and run the command

composer install

#Creating a database connection

In this case, you must have mysql installed in your environment,
or you can create a sqlite file in the database folder,
we're going to use mysql, so it's important that you start your
mysql and create a database. If you prefer or sqlite just
create a database.sqlite file and change the drive in your file
config/database.php, change default DB_CONNECTION to sqlite, 
if you need help, find in laravel documentation.
Configure your connection settings in .env file or config/database.php.
Now you can run the command

php artisan migrate

php artisan serve

#Token for user

To generate a user token you will need to register the user first.
After that, you can easily generate a token by following the steps below.

On your terminal, inside the root folder, run the following commands:

php artisan tinker

>>> $user = User::first();
>>> $user->createToken('myapptoken');

Copy your token into plainTextToken and test it on your postman

The file with the consumption url of the api is in app/Http/ProductsController.php
Change the information to your real data.

The test files are in the test folder.

You can access the endpoint at http://127.0.0.1:8000/api/products

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)




