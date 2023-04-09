<?php
include '../handlers/functions.php';
$keyword = $_GET["keyword"];
$_SESSION["log"] = $keyword;

$pagination = getPagination(search($_SESSION["log"]));
$index = $pagination["index"];
$dataPerPage = $pagination["limit"]; 
$totalPages = $pagination["total"];   
$changes = searchLog($_SESSION["log"],$index,$dataPerPage);
?>
<table class="table table-striped" border="1" cellpadding="10" cellspacing="0">
    <thead>
    <tr>
        <th scope="col">No.</th>
        <th scope="col">Admin</th>
        <th scope="col">Action</th>
        <th scope="col">Date</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            foreach($changes as $row) :
        ?>
        <tr>
            <td scope="row"><?= $i++?></td>
            <td scope="row"><?= $row["admin"]?></td>
            <td scope="row"><?= $row["action"]?></td>
            <td scope="row"><?= $row["time"]?></td>
        </tr>
        <?php
            endforeach;
        ?>
    </tbody>
</table>