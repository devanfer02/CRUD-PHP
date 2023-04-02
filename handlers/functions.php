<?php
    //Connect to database
    $connect = mysqli_connect("localhost","root","","basics");

    // gather student's data from table student
    function query($query)
    {
        global $connect;
        $result = mysqli_query($connect,$query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    // query insert data
    function add($data)
    {
        global $connect;
        $nim = $data["nim"];
        $nama = $data["nama"];
        $prodi = $data["prodi"];
        $email = $data["email"];
        $gambar = $data["gambar"]; 

        $query = "INSERT INTO student VALUES('','$nama','$nim','$prodi','$email','$gambar')";
        mysqli_query($connect,$query);

        // check if data successfully added
        $isSuccess = mysqli_affected_rows($connect) > 0;
        if($isSuccess) 
        {
            printf("Success!\n");
            printf("Status : 200 OK\n");
        } else 
        {
            printf("Failed!\n");
            printf("Error message : \n",mysqli_error($connect));
        }
    }
?>