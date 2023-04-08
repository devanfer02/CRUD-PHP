<?php
    include 'handlers/functions.php';
    session_start();
    checkCookie();
    checkSession();
    $title = 'Admin Page';
    $student = query("SELECT * FROM student");
    $size = count($student);
    if(isset($_POST["search"]))
    {
        $student = search($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php include 'addons/head.php';?>
<body>
    <?php include "addons/navbar.php"?>
    <?php
        if(count($student) > 0)
        {
            include "addons/tables.php";
        } else if ($size == 0)
        {
            include "addons/empty.php";
        } else 
        {
            include 'addons/not_exist.php';
        }
    ?>
    <?php include "addons/footer.php"?>
</body>
</html>