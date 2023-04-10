<?php
include "handlers/functions.php";
session_start();
checkCookie();
checkSession();
$title = "Log Page";
$pagination = getPagination(query("SELECT * FROM logchanges"));
$index = $pagination["index"];
$dataPerPage = $pagination["limit"];
$totalPages = $pagination["total"];
$activePage = $pagination["active"];

$title = 'Log Page';
$changes = query("SELECT * FROM logchanges LIMIT $index, $dataPerPage");
$size = count($changes);
if(isset($_POST["search"]))
{
    $_SESSION["search"] = $_POST["keyword"];

    $pagination = getPagination(search($_POST["keyword"]));
    $index = $pagination["index"];
    $dataPerPage = $pagination["limit"]; 
    $totalPages = $pagination["total"];   
    $changes = searchLog($_POST["keyword"],$index,$dataPerPage);
}

if(isset($_SESSION["log"]))
{
    $pagination = getPagination(search($_SESSION["log"]));
    $index = $pagination["index"];
    $dataPerPage = $pagination["limit"]; 
    $totalPages = $pagination["total"];   
    $changes = searchLog($_SESSION["log"],$index,$dataPerPage);
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php include 'addons/head.php';?>
<body>
    <?php include 'addons/navbar.php';?>
    <?php
        if(count($changes) > 0)
        {
            include 'addons/nav_pages.php';
            include "addons/logtables.php";
        } else if ($size == 0)
        {
            include "addons/empty.php";
        } else 
        {
            include 'addons/not_exist.php';
        }
    ?>
    <?php include 'addons/footer.php';?>
    <script src="javascript/log.js"></script>
</body>
</html>