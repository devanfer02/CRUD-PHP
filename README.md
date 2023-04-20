# Getting Ready to Set Up PHP CRUD

## CRUD PHP 
This repository contains a simple crud webapp using php and mysql <br>
To play with this crud webapp please followw the following instructions

#### NOTE : THIS BRANCH IS STILL IN WORK IN PROGRESS, CURRENTLY MIGRATING FROM MAIN(procedural) TO MASTER(object orriented)

## Set Up PHP CRUD
### Installing xampp in your pc
- Go to xampp web ```https://www.apachefriends.org/```
- Install package version according to your operating system
- Execute the installer you have installed
- Start the xampp control panel
- Turn on or start the apache and mysql

### Making database in phpmyadmin

#### Use Repo Table
You can use the sql folder in app to instantly create table in your database, but makesure to modify the config 
to match your own database name.

#### Create Your Own Table
- After you turn on the apache and mysql, go to ```localhost/phpmyadmin/```
- On the left sidebar, click new and make database with name ```crudphpmvc```
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
|  username| varchar |   100   |     |
|  password| varchar |   300   |     |
+----------+---------+---------+-----+
```

### Clone this project
- Clone this project using whatever you like 
- Make sure the folder is inside the htdocs 
- Also run the command ```composer install``` to install all dependancies required

### Modify the configs
- Search all the localhost/basics occurences in this repo
- change it to your own folder

### Start Localhost
- Go to localhost/dashboard
- Change the dashboard with the name of the project folder
- And you're good to go, i guess.