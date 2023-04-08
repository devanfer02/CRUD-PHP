<?php
    include "handlers/functions.php";
    startSession();
    $title = "Log Page";
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