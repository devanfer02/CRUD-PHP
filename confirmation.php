<?php
include 'handlers/functions.php';

$title = "Confirmation Page";

if(isset($_POST["submit"]))
{
    verify($_POST);
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php include 'addons/head.php';?>
<body>
    
</body>
</html>
