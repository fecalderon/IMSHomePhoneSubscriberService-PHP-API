# IMSHomePhoneSubscriberService-PHP-API
PHP API for WPWA application

Before following the instructions below, please make sure that you already have XAMPP.

Instructions
1. Download the zip file and exact it to your HTDOCS folder inside XAMPP
2. Rename the project to "IMSHomePhoneSubscriberService"
3. Open XAMPP Control Panel
4. Start Apache and MySQL
5. Test the project by going to "Localhost"/IMSHOMEPHONESUBSCRIBERSERVICE
6. Have fun testing the API functionalities

Database Settings:
1. You may see the Database settings and information at Config > config.php
2. Feel free to change the localhost:Port, username, and password there according to the configuration of your XAMPP Apache and MySQL

Database Instruction:
1. Once you have your Apache and MySQL in XAMPP running, please go to PHPMyAdmin (localhost/phpmyadmin)
2. Create a scheme named: "ims"
3. Create a table "subscriber"
4. In creating a table, create 5 columns having the following:
  a. phoneNumber (Primary Key, bigInt(20)
  b. username (VARCHAR(255))
  c. password (VARCHAR(255))
  d. domain (VARCHAR(255))
  e. status (VARCHAR(255))
Note: You may notice that I have not hashed the password in our program. Reason for this is for us to see the password provided by our the exam requirements.
 - But I may have it hashed if requested.

You may have add the following in our program using "Add Subscriber" functionality:
{
  "phoneNumber": "18675181010",
  "username": "16045906403",
  "password": "p@ssw0rd!",
  "domain": "ims.mnc660.mcc302.3gppnetwork.org",
  "status": "ACTIVE"
  }

**Note: I have also included the file "ims.sql" in this repository. This is the database that I have created.**
**You may choose to import this to your PHPMyAdmin.**

Thank you and have fun! :)
  
