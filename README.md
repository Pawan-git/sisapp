SiSApp: Expense Entry System
===============================
A demo application to feed employee expense from a pipe-separated (PSV) file and to get monthly expense report on web page.
 
DIRECTORY STRUCTURE
-------------------

```
app
    application/            Contains the application source code files
    assets/                 Contains the assets: css|js
    system/                 contains framework files

db
    migrations/              contains db migrations


vendor/                  contains dependent 3rd-party packages

```


************
Installation
--------------
************

Download the git repo and place it in htdocs directory inside xampp
OR you may clone the git repo in a directory.

Set the 'base_url' inside app/application/config.php file.
The 'base_url' must be the path upto 'app/' folder ex. 'http://localhost/sisapp/app/'

Create a database with name 'sis_psvapp' and then run migrations
Create DB Schema: Use sql file "sis_psvapp.sql" to create DB schema.

***************
Run the application in your web browser
***************

Try to run the url: 'http://localhost/sisapp/app/'

Login credentials for admin account:
Username: admin
Password: sisadmin

Login credentials for user or employee account:
Username will be username. See users listing page in admin interface.
Password is same as username.
There is an option for "password update" in user interface, so they can update password after firsttime logged in. 

We are generating username for employees by using "employee_name" and "employee_address" fields in uploaded psv file.

***************
.htaccess
***************

*******************************************
``` .htaccess ``` file in app folder will look like this:
*******************************************
```
RewriteEngine On
RewriteBase /sisapp/app/   #you might be need to change this path according to your folders
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]

```
