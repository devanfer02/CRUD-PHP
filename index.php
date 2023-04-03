<?php
    include 'handlers/functions.php';

    $student = query("SELECT * FROM student");
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
    <?php
        if(count($student) > 0)
        {
            include "addons/tables.php";
        } else 
        {
            include "addons/empty.php";
        }
    ?>
    <?php include "addons/footer.php"?>
</body>
</html>