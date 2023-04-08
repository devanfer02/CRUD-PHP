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
<?php include 'addons/head.php';?>
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