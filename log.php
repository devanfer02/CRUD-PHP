<?php
    include "handlers/functions.php";
    session_start();
    checkCookie();
    checkSession();
    $title = "Log Page";
    //TODO : Nambah log activity untuk ngecek
    //admin sudah melakukan perubahan apa saja
    //ke webnya
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php include 'addons/head.php';?>
<body>
    <?php include 'addons/navbar.php';?>
    <?php include 'addons/logtables.php';?> 
    <?php include 'addons/footer.php';?>
</body>
</html>