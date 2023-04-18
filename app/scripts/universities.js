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

const autocompleteuni = () => {
    $('#university').autocomplete({
        source: universities
    })
}

export default { autocompleteuni, universities};