
<div class="">
    <form class="d-flex form-inline" role="search" method="post" action="index.php" style="display:inline-block;">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" 
        name="keyword" autofocus autocomplete="off" id="keyword">    
        <input type="hidden" name="search" value="true">    
        <button class="btn btn-outline-success" type="submit" id="btn-search">Search</button>
    </form>
</div>
<div id="container">
    <table class="table table-striped" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">No.</th>
                <th scope="col" style="text-align: center;">Action</th>
                <th scope="col" style="text-align: center;">University</th>
                <th scope="col" style="text-align: center;">NIM</th>
                <th scope="col" style="text-align: center;">Name</th>
                <th scope="col" style="text-align: center;">Email</th>
                <th scope="col" style="text-align: center;">Major</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach($student as $row) :
            ?>
            <tr>
                <td style="text-align:center;"scope="row"><?= $i++?></td>
                <td style="text-align:center;">
                    <a class="btn btn-success btn-sm" href="update.php?id=<?= $row["id"]?>">UPDATE</a> 
                    <a class="btn btn-danger btn-sm" href="delete.php?id=<?= $row["id"]?>">DELETE</a>
                </td>
                <td style="text-align:center;">
                    <img src="img/uni_logos/<?= $row["gambar"]?>" width="50" height="50" alt="" style="vertical-align:middle;">
                </td>
                <td style="text-align:center;"><?= $row["nim"]?></td>
                <td style="text-align:center;"><?= $row["nama"]?></td>
                <td style="text-align:center;"><?= $row["email"]?></td>
                <td style="text-align:center;"><?= $row["prodi"]?></td>
            </tr>
            <?php
                endforeach;
                ?>
        </tbody>
    </table>
</div>