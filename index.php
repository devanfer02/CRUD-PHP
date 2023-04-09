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
        $pagination = getPagination(search($_POST["keyword"]));
        $index = $pagination["index"];
        $dataPerPage = $pagination["limit"]; 
        $totalPages = $pagination["total"];   
        $student = search($_POST["keyword"],$index,$dataPerPage);
    }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<?php include 'addons/head.php';?>
<body>
    <?php 
        include "addons/navbar.php";
        include "addons/nav_pages.php";
    ?>
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