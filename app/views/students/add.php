<div class="container card div-add-student" style="margin-top: 14px; margin-bottom: 8px;">
    <div class="card-body" style="margin-bottom:-15px;">
        <h3>Add Student</h3>
    </div>
    <hr>
    <form action="" method="post" style="padding-top: 10px; padding-left: 14px">
        <div class="mb-3">
            <label for="nama" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name" id="name" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Major</label>
            <input type="text" class="form-control" name="prodi" id="prodi" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="university" class="form-label">University</label>
            <input type="text" class="form-control" name="university" id="university" autocomplete="off" required>
            <script src="<?=APPURL;?>/scripts/script.js" type="module"></script>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Add Data</button>
    </form>
</div>