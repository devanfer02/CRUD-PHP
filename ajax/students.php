<?php
include '../handlers/functions.php';
$keyword = $_GET["keyword"];
$_SESSION["index"] = $keyword;

$pagination = getPagination(search($_SESSION["index"]));
$index = $pagination["index"];
$dataPerPage = $pagination["limit"]; 
$totalPages = $pagination["total"];   
$student = search($_SESSION["index"],$index,$dataPerPage);
?>
<table class="table table-striped" border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">No.</th>
        <th scope="col">Action</th>
        <th scope="col">University</th>
        <th scope="col">NIM</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Major</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $i = 1;
            foreach($student as $row) :
        ?>
        <tr>
            <td scope="row"><?= $i++?></td>
            <td>
                <a class="btn btn-success btn-sm" href="update.php?id=<?= $row["id"]?>">UPDATE</a> 
                <a class="btn btn-danger btn-sm" href="delete.php?id=<?= $row["id"]?>">DELETE</a>
            </td>
            <td>
                <img src="img/uni_logos/<?= $row["gambar"]?>" width="50" height="50" alt="">
            </td>
            <td><?= $row["nim"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["email"]?></td>
            <td><?= $row["prodi"]?></td>
        </tr>
        <?php
            endforeach;
            ?>
    </tbody>
</table>