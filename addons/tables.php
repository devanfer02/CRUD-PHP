<div class="">
    <form class="d-flex" role="search" method="get" action="index.php">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="keyword" autofocus autocomplete="off">
        <button class="btn btn-outline-success" type="submit" name="search">Search</button>
    </form>
</div>
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