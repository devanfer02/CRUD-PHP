<?php
    include './data/uni_options.php';

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
        global $universities;
        global $connect;
        
        $nim = htmlspecialchars($data["nim"]);;
        $nama = htmlspecialchars($data["nama"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);

        //checking if university exist
        $gambar = htmlspecialchars($data["gambar"]); 
        if(!in_array($gambar,$universities))
        {
            return 
            "<h3>Failed!</h3><br>".
            "<h4>University doesn't exist!</h4><br>".
            "<h4>Please contact customer support</h4><br>";
            "<h4>To verify your university</h4><br>";
        }
        $gambar = "".$gambar.".png";

        $query = "INSERT INTO student VALUES('','$nama','$nim','$prodi','$email','$gambar')";
        mysqli_query($connect,$query);

        // return status 
        $isSuccess = mysqli_affected_rows($connect) > 0;
        if($isSuccess)
        {
            return 
            "<h3>Success!</h3><br>".
            "<h4>Data has been successfully added to database!</h4><br>";
        }
        return 
        "<h3>Failed!</h3><br>".
        "<h4>Data failed to add to database!</h4><br>";
    }

    function delete($id)
    {
        global $connect;
        mysqli_query($connect,"DELETE FROM student WHERE id = $id");
        return mysqli_affected_rows($connect);
    }

    function update($id, $data)
    {
        global $connect;
        global $universities;
        
        $nim = htmlspecialchars($data["nim"]);;
        $nama = htmlspecialchars($data["nama"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);

        //checking if university exist
        $gambar = htmlspecialchars($data["gambar"]); 
        if(!in_array($gambar,$universities))
        {
            return 
            "<h3>Failed!</h3><br>".
            "<h4>University doesn't exist!</h4><br>".
            "<h4>Please contact customer support</h4><br>";
            "<h4>To verify your university</h4><br>";
        }
        $gambar = "".$gambar.".png";

        $query = "UPDATE student
        SET nim = '$nim', 
        nama = '$nama', 
        prodi = '$prodi',
        email = '$email',
        gambar = '$gambar'
        WHERE id = $id";

        mysqli_query($connect,$query);

        $isSuccess = mysqli_affected_rows($connect) > 0;
        if($isSuccess)
        {
            return 
            "<h3>Success!</h3><br>".
            "<h4>Data has been successfully added to database!</h4><br>";
        }
        return 
        "<h3>Failed!</h3><br>".
        "<h4>Data failed to add to database!</h4><br>";
    }

    function getData($query)
    {
        global $connect;
        $result = mysqli_query($connect,$query); 

        //check if data exist or not
        if(mysqli_num_rows($result) > 0)
        {
            return mysqli_fetch_assoc($result);    
        } 
        return NULL;
    }

    function search($keyword)
    {
        
        $query = "SELECT * FROM student 
        WHERE nama LIKE '%$keyword%' OR
        nim LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        prodi LIKE '%$keyword%' OR
        gambar LIKE '%$keyword%'";

        if(func_num_args() == 3)
        {
            $args = func_get_args();
            $index = $args[1];
            $limit = $args[2];
            $query = "SELECT * FROM student 
            WHERE nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            prodi LIKE '%$keyword%' OR
            gambar LIKE '%$keyword%' LIMIT $index,$limit";
        }
        return query($query);
    }

    function register($data)
    {
        global $connect;

        $name = stripslashes($data["name"]);
        $username = stripslashes($data["username"]);
        $password = mysqli_real_escape_string($connect, $data["password"]);
        $confirm = mysqli_real_escape_string($connect, $data["confirm"]);
        $email = stripslashes($data["email"]);
        
        if(preg_match('/[^a-z0-9]/',$username))
        {
            return -404; 
        }

        if($password !== $confirm)
        {
            return -405;
        }

        // username exist already?
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($connect,$query);

        if(mysqli_fetch_assoc($result))
        {
            return -406;
        }

        $password = password_hash($password,PASSWORD_DEFAULT);
        $query = "INSERT INTO users VALUES('','$username','$password','$email','$name')";
        mysqli_query($connect,$query);

        return mysqli_affected_rows($connect);
    }

    function login($data)
    {
        global $connect;
        
        $username = $data["username"];
        $password = $data["password"];

        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($connect,$query);

        //Check if it exist
        if(mysqli_num_rows($result) !== 1)
        {
            return false;    
        }

        $row = mysqli_fetch_assoc($result);
        if (!password_verify($password,$row["password"]))
        {
            return false;
        }
        
        $_SESSION["login"] = true;
        $_SESSION["admin"] = $row["name"];

        if(isset($data['remember']))
        {
            setcookie('sudorootuserid',$row['id'],time()+120);
            setcookie('sudorootuserkey',hash('sha512',$row['username']),time()+120);
        }
        return true;
        
    }

    function checkSession()
    {
        if(!isset($_SESSION["login"]))
        {
            header("Location: login.php");
            exit;
        }
    }

    function checkCookie()
    {
        global $connect;
        if(isset($_COOKIE['sudorootuserid']) && isset($_COOKIE['sudorootuserkey']))
        {
            $rootid = $_COOKIE['sudorootuserid'];
            $rootkey = $_COOKIE['sudorootuserkey'];

            $query = "SELECT username FROM users WHERE id=$rootid";
            $result = mysqli_query($connect,$query);
            $row = mysqli_fetch_assoc($result);

            if($rootkey === hash('sha512',$row['username']))
            {
                $_SESSION['login'] = true;
            }
        }
    }

    function getPagination($data)
    {
        $pagination = array();
        $dataPerPage = 5;
        $dataTable = count($data);
        $totalPages = (int)ceil($dataTable / $dataPerPage);
        $activePage = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
        $index = ($activePage - 1) * $dataPerPage;

        $pagination["index"] = $index;
        $pagination["limit"] = $dataPerPage;
        $pagination["total"] = $totalPages;
        $pagination["active"] = $activePage;

        return $pagination;
    }

    function addLog()
    {
        //Buat nyimpen history changes oleh admin
    }

    function filterExtension($string, $extension)
    {
        return substr($string,0,strrpos($string,$extension));
    }
?>