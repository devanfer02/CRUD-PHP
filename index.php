<?php
include 'handlers/functions.php';
session_start();
checkCookie();
checkSession();

$pagination = getPagination(query("SELECT * FROM student"));
$index = $pagination["index"];
$dataPerPage = $pagination["limit"];
$totalPages = $pagination["total"];
$activePage = $pagination["active"];

$title = 'Admin Page';
$student = query("SELECT * FROM student LIMIT $index, $dataPerPage");
$size = count($student);
if(isset($_POST["search"]))
{
    $_SESSION["index"] = $_POST["keyword"];

    $pagination = getPagination(search($_POST["keyword"]));
    $index = $pagination["index"];
    $dataPerPage = $pagination["limit"]; 
    $totalPages = $pagination["total"];   
    $student = search($_POST["keyword"],$index,$dataPerPage);
}

if(isset($_SESSION["index"]))
{
    $pagination = getPagination(search($_SESSION["index"]));
    $index = $pagination["index"];
    $dataPerPage = $pagination["limit"]; 
    $totalPages = $pagination["total"];   
    $student = search($_SESSION["index"],$index,$dataPerPage);
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php include 'addons/head.php';?>
<body>
    <?php include "addons/navbar.php"; ?>
    <?php
        if(count($student) > 0)
        {
            include "addons/nav_pages.php";
            include "addons/tables.php";
        } else if ($size == 0)
        {
            include "addons/empty.php";
        } else 
        {
            include 'addons/not_exist.php';
        }
    ?>
    <?php if(count($student) > 0 ): ?> 
        <a href="print.php" class="btn btn-primary" style="margin-left:12px;" target="_blank">Print</a>
    <?php endif; ?>
    <?php include "addons/footer.php"?>
    <script src="javascript/index.js"></script>
</body>

</html>