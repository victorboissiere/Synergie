# Synergie

##Installation
The website is based on the Laravel Framework (http://laravel.com/docs/5.1).

###Setting a web development environment
You need to set up a web development environment to run the website on your local machine.
I recommend using WAMP : http://www.wampserver.com/en/.
On windows, a directory wamp will be created at the root of your hard drive. 
All the website files should be placed in wamp/www. Run wamp and the website should be available at http://localhost/public
in your web browser.

###Install composer
You have to install composer (https://getcomposer.org/download/) and run the command below in the root directory.
```
composer install
```

###Env file
Rename the .env.example file in the root directory in .env and fill in the correct values of your configuration.

###Permissions
If you see a blank page it means that Laravel cannot access the storage directory.
In order to fix that you need to change the default permissions (especially on Linux).
Command : 
```
sudo chmod -R 777 storage/
```

###Set up the database
You need to setup a database and then run the commands below.
```
php artisan migrate
php artisan db:seed
```

##Available commands
All the commands available can be found using : php artisan

