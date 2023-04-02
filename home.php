<?php
    include 'handlers/functions.php';
    if(isset($_POST["submit"]))
    {
        $isSuccess = add($_POST); 
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<body>
    <?php include "addons/navbar.php"?>
    <div class="container">
      <h1 class="text-center mt-5">Welcome to the CRUD Web App</h1>
      <p class="text-center">This is a web application that allows you to Create, Read, Update, and Delete data.</p>
      <p class="text-center">You can use this app to manage your data efficiently and easily.</p>
      <p class="text-center">This CRUD Web App is implemented with php programming language</p>
      <p class="text-center">If you have feedback, you can contact me through the contact below</p>
    </div>
    <div class="container">
        <h1 class="text-center mt-5">About Me</h1>
        <p class="text-center">My name is Devan Ferrel. I'm an undergraduate University Brawijaya Student</p>
        <p class="text-center">I'm majoring in Information Technology Education</p>
        <p class="text-center">I'm interested in backend and competitive programming</p>
        <p class="text-center">Feel free to connect with me with the contact below!</p>
    </div>
    <?php include "addons/footer.php"?>
</body>
</html>