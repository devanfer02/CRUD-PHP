<header class="position-relative">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" id="nav">
            <a class="navbar-brand" href="<?= BASEURL;?>">CRUD PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link custom-nav" href="<?= BASEURL;?>/students">List Students</a>
                    <a class="nav-link custom-nav" href="<?= BASEURL;?>/students/add">Add Student</a>
                    <a class="nav-link custom-nav" href="<?= BASEURL;?>/about">About</a>
                    <a class="nav-link custom-nav" href="<?= BASEURL;?>/auth/logout">Logout</a>     
                </div>
                <img src="<?=BASEURL;?>/icons/icons8-dark-mode-24.png" alt="" id="themeToggle" style="margin-left: 10px;">
            </div>
        </div>
    </nav>
</header> 