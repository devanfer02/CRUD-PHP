<div style="display:inline-block;padding-top: 10px; padding-left: 14px; padding-bottom:10px;">
    <a href="?page=<?=$activePage > 1 ? $activePage - 1: $activePage?>" class="btn btn-primary">&lt</a>
    <?php for($i = 1; $i <= $totalPages; $i++) :?>
        <form action="" method="get" style="display:inline-block;padding-top: 10px; padding-left: 5px; padding-right:5px;padding-bottom:10px;">
            <?php if((int)$activePage === $i) :?>
                <a href="?page=<?=$i?>" class="btn btn-success"><?=$i?></a>
            <?php else : ?>
                <a href="?page=<?=$i?>" class="btn btn-primary"><?=$i?></a>
            <?php endif;?>
        </form>
    <?php endfor; ?>
    <a href="?page=<?=$activePage < $totalPages ? $activePage + 1 : $activePage?>" class="btn btn-primary">&gt</a>
</div>  