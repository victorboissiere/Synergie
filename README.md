# synergie

##Installation
The website is based on the Laravel Framework (http://laravel.com/docs/5.1).

###Setting a web development environment
You need to set up a web development environment to run the website on your local machine.
I recommend using WAMP : http://www.wampserver.com/en/.
On windows, a directory wamp will be created at the root of your hard drive. 
All the website files should be placed in wamp/www. Run wamp and the website should be available at http://localhost/public
in your web browser.

###Env file
Create a file .env at the root of the website files and copy/paste the text below with your own values:
```
APP_KEY=your_app_key
APP_DEBUG=true
```

###Permissions
If you see a blank page it means that Laravel cannot access the storage directory.
In order to fix that you need to change the default permissions (especially on Linux).
Command : 
```
sudo chmod -R 777 storage/
```

###Setting the database
No database required at the moment

###Installing composer (optional)
If you need to install your own dependencies you can use composer.

##Available commands
All the commands available can be found using : php artisan

