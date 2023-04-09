<div class="">
    <form class="d-flex" role="search" method="post" action="log.php">
      <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" 
      name="keyword" autofocus autocomplete="off" id="keyword">
      <input type="hidden" name="search" value="true">  
      <button class="btn btn-outline-success" type="submit" name="search" id="btn-search">Search</button>
    </form>
</div>
<div id="container">
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
</div>