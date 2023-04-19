<div class="custom-table-container mt-2">
    <form class="d-flex form-inline" role="search" method="post" action="<?=BASEURL;?>/students/search" 
    style="display:inline-block;">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" 
        name="keyword" autofocus autocomplete="off" id="keyword">    
        <input type="hidden" name="search" value="true">    
        <button class="btn btn-outline-success me-2" type="submit" id="btn-search">Search</button>
        <a href="<?=BASEURL;?>/students/print" class="btn btn-primary" target="_blank">Print</a>
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
                <td style="text-align:center;" > 

                    <a class="btn btn-success btn-sm viewModalChange" href="<?=BASEURL;?>/students/update/<?=$student["id"];?>"
                    data-bs-toggle="modal" data-bs-target="#modalForm" data-id="<?=$student['id'];?>">UPDATE</a> 
                   
                    <a class="btn btn-danger btn-sm" href="<?=BASEURL;?>/students/delete/<?=$student["id"];?>"
                    onclick="return confirm('Delete student : <?=$student['name']?>')">DELETE</a>

                </td>
                <td style="text-align:center;">
                    <img src="<?=BASEURL?>/img/uni_logos/<?= $student["university"]?>.png" width="50" height="50" alt="" style="vertical-align:middle;">
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
    <div class="modal modal-lg" id="modalForm" tabindex="-1" aria-labelledby="modalForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalFormLabel">Update Student Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?=BASEURL;?>/students/update" method="post"></form>
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="major" class="form-label">Major</label>
                            <input type="text" class="form-control" name="major" id="major" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" autocomplete="off" required>
                        </div>
                        <div class="mb-3 selector-uni">
                            <label for="university" class="form-label">University</label>
                            <select class="form-control" id="university">
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Data</button>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

