<div style="display: inline-block;">
    <?php for($i = 1; $i <= $totalPages; $i++) :?>
    <form action="" method="get" style="display:inline-block;padding-top: 10px; padding-left: 14px; padding-bottom:10px;">
        <?php if($activePage == $i) :?>
            <a href="?page=<?=$i?>" class="btn btn-success"><?=$i?></a>
        <?php else : ?>
            <a href="?page=<?=$i?>" class="btn btn-primary"><?=$i?></a>
        <?php endif;?>
    </form>
    <?php endfor; ?>
</div>