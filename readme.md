# Synergie

## Installation
The website is based on the Laravel Framework (http://laravel.com/docs/5.1).

### Setting a web development environment
You need to set up a web development environment to run the website on your local machine.
I recommend using WAMP : http://www.wampserver.com/en/.
On windows, a directory wamp will be created at the root of your hard drive.
All the website files should be placed in wamp/www. Run wamp and the website should be available at http://localhost/public
in your web browser.

### Install composer
You have to install composer (https://getcomposer.org/download/) and run the command below in the root directory.
```
composer install
```

### Env file
Rename the .env.example file in the root directory in .env and fill in the correct values of your configuration.
Comments should also be removed.

### Permissions
If you see a blank page it means that Laravel cannot access the storage directory.
In order to fix that you need to change the default permissions (especially on Linux).
Command :
```
sudo chmod -R 777 storage/
```

### Set up the database
You need to setup a database and then run the commands below.
```
php artisan migrate
php artisan db:seed
```

## Available commands
All the commands available can be found using : php artisan

## Installation issues
### MCrypt
For an issue related to mcrypt, be sure to enable/install PHP extension mcrypt.
### 404 page not found
If you cannot click on pages without a 404 error page not found, it is probably
because you haven't allowed your website to override apache rules with .htaccess.
In order to do so, you can add this quick fix at the top of your virtual host configuration file (for apache users)

```
<Directory /var/www/>
    AllowOverride all
</Directory>
```
This file is usually available in /etc/apache2/sites-enabled/000-default.conf.

You can also enable rewrite mod on Apache using the command below.
```
sudo a2enmod rewrite
```
