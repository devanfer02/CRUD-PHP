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
    <table class="table table-striped" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Action</th>
                <th scope="col">University</th>
                <th scope="col">NIM</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Major</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach($student as $row) :
            ?>
            <tr>
                <td scope="row"><?= $i++?></td>
                <td>
                    <a class="btn btn-success btn-sm" href="">UPDATE</a> 
                    <a class="btn btn-danger btn-sm" href="delete.php?id=<?= $row["id"]?>">DELETE</a>
                </td>
                <td>
                    <img src="img/braw.png" width="50" alt="">
                </td>
                <td><?= $row["nim"]?></td>
                <td><?= $row["nama"]?></td>
                <td><?= $row["email"]?></td>
                <td><?= $row["prodi"]?></td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
        
    </table>
    <?php include "addons/footer.php"?>
</body>
</html>