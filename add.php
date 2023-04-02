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
    <?php include "addons/nav.php"?>
    <form action="" method="post" style="padding-top: 10px;">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" class="form-control" name="prodi" id="prodi" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="text" class="form-control" name="gambar" id="gambar" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Add Data</button>
    </form>
    <?php
        if(isset($isSuccess) && $isSuccess)
        {
            echo "<h3>Success!</h3><br>";
            echo "<h4>Data has been successfully added to database!</h4><br>";
        } else if (isset($isSuccess))
        {
            echo "<h3>Failed!</h3><br>";
            echo "<h4>Data failed to add to database!</h4><br>";
        }
    ?>
    <?php include "addons/footer.php"?>
</body>
</html>