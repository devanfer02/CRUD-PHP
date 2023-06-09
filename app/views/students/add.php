<div class="container card div-add-student" style="margin-top: 14px; margin-bottom: 8px;">
    <div class="card-body" style="margin-bottom:-15px;">
        <h3>Add Student</h3>
    </div>
    <hr>
    <form action="<?=BASEURL;?>/students/insert" method="post" style="padding-top: 10px; padding-left: 14px">
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
        <div class="mb-3">
            <label for="university" class="form-label">University</label>
            <input type="text" class="form-control" name="university" id="university-add-data" autocomplete="off" required>
            <script>
                const universities = 
[
    "Universitas Bina Nusantara",
    "Politeknik Negeri Surabaya",
    "Politeknik Negeri Malang",
    "Univeristas Telkom",
    "Universitas Brawijaya", 
    "Universitas Gadjah Mada",
    "Universitas Indonesia",
    "Universitas Negeri Malang",
    "Universitas Airlangga",
    "Universitas Diponegoro",
    "Universitas Padjajaran",
    "Universitas Sebelas Maret",
    "Universitas Udayana",
    "Universitas Pendidikan Indonesia",
    "Institut Teknologi Sepuluh November",
    "Institut Teknologi Bandung",
    "Institut Pertanian Bogor",
    "Universitas Negeri Jakarta"
];
                $(document).ready(() => {
    $('#university-add-data').autocomplete({
        source: universities
    })
});
            </script>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Add Data</button>
    </form>
</div>