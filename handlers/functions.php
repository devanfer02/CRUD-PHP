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

    function add($query)
    {
        global $connect;
        mysqli_query($connect,$query);
    }
?>