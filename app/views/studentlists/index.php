<div class="custom-table-container">
    <form class="d-flex form-inline" role="search" method="post" action="index.php" style="display:inline-block;">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" 
        name="keyword" autofocus autocomplete="off" id="keyword">    
        <input type="hidden" name="search" value="true">    
        <button class="btn btn-outline-success" type="submit" id="btn-search">Search</button>
    </form>
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
            <tr> 
                <td style="text-align:center;"scope="row"></td>
                <td style="text-align:center;">
                    <a class="btn btn-success btn-sm" >UPDATE</a> 
                    <a class="btn btn-danger btn-sm" >DELETE</a>
                </td>
                <td style="text-align:center;">
                    <!-- <img src="img/uni_logos/<?= $row["gambar"]?>" width="50" height="50" alt="" style="vertical-align:middle;"> -->
                    <img src="" alt="">
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>