<?php
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();
    setcookie('sudorootuserid','',time()-3600);
    setcookie('sudorootuserkey','',time()-3600);
    header("Location: login.php");
    exit;
?>