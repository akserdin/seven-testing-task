Task: Create site on apache.

0) Create a .htaccess file with content

RewriteEngine On
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]

1) Create file index.php

2) Create a class "Autoloader".
This class should have a function that will register the autoloader.
Autoloader must load the classes in the Site\ namespace from the src folder.
The autoloader class should not be extended.

3) Create an abstract class "Controller".
The class must have two abstract function "getAction" and "postAction" and also there should be function "notFoundAction" (none abstract).

4) Create a class "Viewer". This class must have a function for render tpl.

5) Create a class "User". This class will extend "Controller". Create in this class two functions from the abstract class.

Function "getAction":
Render a form with two inputs "Name" and "Email".
Render a list of all saved data. All data must be saved to the .json file.
Form and list must be rendered with class "Viewer".

Function "postAction":
Save submitted data from the form and redirect to show form and list page.

6) In the index.php call autoloader. Get the URL from the client and based on this URL call special functions from "User" class.

Additional:
All classes must be in src/...
All view files must be in views/...

When a user calls domain.com/get the "getAction" function must be running from "User" class.
When a user calls domain.com/post the "postAction" function must be running from "User" class.
When a user calls domain.com/something the "notFoundAction" function must be running from "User" class.
