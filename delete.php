<?php
    include "./handlers/functions.php";
    startSession();
    $id = $_GET["id"];
    if(delete($id) > 0)
    {
        echo "
        <script>
            alert('Data has been successfully deleted!');
            document.location.href = 'index.php';
        </script>";
    } else 
    {
        echo "
        <script>
            alert('Data failed to get deleted!');
            document.location.href = 'index.php';
        </script>";
    }
?>