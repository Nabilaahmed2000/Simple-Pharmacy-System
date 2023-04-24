# Installation
 Follow these steps to install the application.
1. Clone the Repository
```
git clone https://github.com/Nabilaahmed2000/Simple-Pharmacy-System.git

```
2. Go to project directory

```
cd Simple-Pharmacy-System 

```

3. Install packages with composer

```
composer install

```
4. Create your database 

6. Rename .env.example to .env

```
cp .env.example ./.env

```

7. Set database connection to your database in the .env file.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= your_DB_name
DB_USERNAME=root
DB_PASSWORD=

```

8. Import full database sql file in the database folder, or run migrations
Use this command to run migrations

```
php artisan migrate --seed

```
9. Start the local server and browser to your app.
This command will start the development server
```
php artisan serve

```

10. Open the address in the terminal in your browser.Usually address is usually like this:
```
http://127.0.0.1:8000

```