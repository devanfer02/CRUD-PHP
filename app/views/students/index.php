<div class="custom-table-container mt-1">
    <form class="d-flex form-inline" role="search" method="post" action="index.php" style="display:inline-block;">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" 
        name="keyword" autofocus autocomplete="off" id="keyword">    
        <input type="hidden" name="search" value="true">    
        <button class="btn btn-outline-success me-2" type="submit" id="btn-search">Search</button>
        <a href="print.php" class="btn btn-primary" target="_blank">Print</a>
    </form>
</div>
<div class="row custom-table-container">
    <div class="col-lg-6">
        <?php Flasher::flash();?>
    </div>
</div>
<div class="custom-table-container">
    <table class="table table-striped" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">No.</th>
                <th scope="col" style="text-align: center;">Action</th>
                <th scope="col" style="text-align: center;">University</th>
                <th scope="col" >NIM</th>
                <th scope="col" >Name</th>
                <th scope="col" >Email</th>
                <th scope="col" >Major</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $i = 1;
                foreach($data["students"] as $student) :
            ?>
            <tr> 
                <td style="text-align:center;"scope="row"><?= $i++?></td>
                <td style="text-align:center;">
                    <a class="btn btn-success btn-sm" href="<?=BASEURL;?>/students/update/<?=$student["id"];?>">UPDATE</a> 
                    <a class="btn btn-danger btn-sm" href="<?=BASEURL;?>/students/delete/<?=$student["id"];?>"
                    onclick="return confirm('Delete student : <?=$student['name']?>')">DELETE</a>
                </td>
                <td style="text-align:center;">
                    <img src="../public/img/uni_logos/<?= $student["university"]?>.png" width="50" height="50" alt="" style="vertical-align:middle;">
                </td>
                <td><?= $student["nim"]?></td>
                <td><?= $student["name"]?></td>
                <td><?= $student["email"]?></td>
                <td><?= $student["major"]?></td>
            </tr>
            <?php
                endforeach;
                ?>
        </tbody>
    </table>
</div>