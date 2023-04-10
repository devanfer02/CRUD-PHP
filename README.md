# Getting Ready to Set Up PHP CRUD

## CRUD PHP 
This repository contains a simple crud webapp using php and mysql <br>
To play with this crud webapp please followw the following instructions

## Set Up PHP CRUD
### Installing xampp in your pc
- Go to xampp web ```https://www.apachefriends.org/```
- Install package version according to your operating system
- Execute the installer you have installed
- Start the xampp control panel
- Turn on or start the apache and mysql

### Making database in phpmyadmin
- After you turn on the apache and mysql, go to ```localhost/phpmyadmin/```
- On the left sidebar, click new and make database with name ```basics```
- Make a table with name ```student``` with given category
```
+----------+---------+---------+-----+
|  nama    |  jenis  | panjang | A_I |
+----------+---------+---------+-----+
|  id      |   int   |   11    |  On |
|  nama    | varchar |   150   |     |
|  nim     | varchar |   15    |     |
|  prodi   | varchar |   100   |     |
|  email   | varchar |   100   |     |
|  gambar  | varchar |   100   |     |
+----------+---------+---------+-----+
```
- Make a table with name ```users``` with given category
```
+----------+---------+---------+-----+
|  nama    |  jenis  | panjang | A_I |
+----------+---------+---------+-----+
|  id      |   int   |   11    |  On |
|  username| varchar |   50    |     |
|  password| varchar |   300   |     |
|  email   | varchar |   100   |     |
|  name    | varchar |   250   |     |
+----------+---------+---------+-----+
```
- Make a table with name ```logchanges``` with given category
```
+----------+---------+---------+-----+
|  nama    |  jenis  | panjang | A_I |
+----------+---------+---------+-----+
|  id      |   int   |   11    |  On |
|  admin   | varchar |   250   |     |
|  action  | varchar |   250   |     |
|  time    | varchar |   250   |     |
+----------+---------+---------+-----+
```

### Clone this project
- Clone this project using whatever you like 
- Make sure the folder is inside the htdocs 
- Also run the command ```composer install``` to install all dependancies

### Start Localhost
- Go to localhost/dashboard
- Change the dashboard with the name of the project folder
- And you're good to go, i guess.