

# Online-Banking-system       


Abstract of the project:
>The project is aimed at creating an Online Banking System for customers. It should be an online
application that can be accessed throughout the organization and outside as well with proper login provided. Upon verification, users should be provided with requisite account details such as account balance, last 5 transactions etc. Common online banking facilities like money transfer should also be accommodated in the system. Make necessary assumptions as and when required and state them clearly.



This project is divided into three parts: 

>The index page for the customer login that is accesible to user on homepage.

>A staff login page that is hidden to provide restricted access.

>An admin login page that is hidden to provide restricted access.


Steps to install and run:

Download and set up a XAMPP or similar environment. LAMP can be used for ubuntu systems.

Start the Apache and MySQL servers.

In the _inc/dbconn.php file, type the username and password of your phpmyadmin setup in the appropriate places.

Open phpmyadmin and create a new database named bank_db. 

Use the bank_db.sql file to import the database tables.

Copy the project folder to the htdocs/ directory in your xampp folder. Rename the project directory to onlinebank or whatever you deem suitable.

Now, navigate to localhost/<PROJECT_DIRECTORY_NAME> on your preferred browser.

Navigate to 
1. localhost/onlinebankingsystem/
2. localhost/onlinebankingsystem/adminlogin.php
3. localhost/onlinebankingsystem/staff_login.php



