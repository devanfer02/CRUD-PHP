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
        
        $nim = htmlspecialchars($data["nim"]);;
        $nama = htmlspecialchars($data["nama"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $gambar = htmlspecialchars($data["gambar"]); 

        //check nim valid
        if(strlen($nim) != 15)
        {
            return false;
        }

        $query = "INSERT INTO student VALUES('','$nama','$nim','$prodi','$email','$gambar')";
        mysqli_query($connect,$query);

        // check if data successfully added
        $isSuccess = mysqli_affected_rows($connect) > 0;
        return $isSuccess;
    }

    function delete($id)
    {
        
    }
?>