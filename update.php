<?php
    include 'handlers/functions.php';
    include 'data/uni_options.php';
    $id = $_GET["id"];
    $query = "SELECT * FROM student WHERE id=$id";
    $data = getData($query);

    $university_list = json_encode($universities);
    echo "<script>let uni = $university_list;</script>";
    if(isset($_POST["submit"]))
    {
        $isSuccess = update($id ,$_POST); 
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Admin Page</title>
</head>
<body>
    <?php 
        include "addons/navbar.php";
    
        if($data != NULL)
        {
    ?>
    <form action="" method="post" style="padding-top: 10px; padding-left: 14px">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" required 
            value="<?=$data["nama"]?>">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" autocomplete="off" required
            value="<?=$data["nim"]?>">
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" class="form-control" name="prodi" id="prodi" autocomplete="off" required
            value="<?=$data["prodi"]?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" autocomplete="off" required
            value="<?=$data["email"]?>">
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Universitas</label>
            <input type="text" class="form-control" name="gambar" id="gambar" autocomplete="off" required
            value="<?=filterExtension($data["gambar"],".png")?>">
            <script>
                $(document).ready(() => {
                    $('#gambar').autocomplete({
                        source: uni
                    });
                });
            </script>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update Data</button>
    </form>
    <?php   
        } else 
        {
            include 'addons/not_exist.php';
        }
    ?>
    <?php
        if(isset($isSuccess))
        {
            
            $isSuccess = "<div style='padding-left: 20px;'>$isSuccess</div>";
            echo $isSuccess;
        } 
    ?>
    <?php include "addons/footer.php"?>
</body>
</html>