# simple-login-php
Some lines of the code are written in Malay, sorry!
Please note that this login page is not using hashed passwords method. (Don't use this for real projects!)

## Basic Documentation

### login.sql
SQL file for the login system. Use phpMyAdmin to import. Name your database as "practicelogin";

### connection.php
Containing PHP elements to connect your system with database through mysqli_connect. Make sure to check if your mysql credentials and database name are right.

### index.php
Containing HTML elements of a login page and PHP elements are used to make sure those who logged in will be redirected to dashboard.php and to connect pros-login.php with the index.php file.

### pros-login.php
Containing PHP elements to make login works by communicating your PHP file with database through mysqli_query.  

### confirmation.php
Containing PHP elements to make sure no one can access dashboard.php without logging in. Just use "include('confirmation.php');" on pages that you want users to login first before accessing it.

### logout.php
Containing PHP elements to log you out by ending your session. 

### dashboard.php
Basically just a landing page to see if you are logged in.
