<?php

include 'config/db.php';

session_start();
// session_unset();
// session_destroy();

if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
    unset($_SESSION['username']);
    $_SESSION['message'] = "Logged Out Successfully";
}

header('location:login.php');

?>