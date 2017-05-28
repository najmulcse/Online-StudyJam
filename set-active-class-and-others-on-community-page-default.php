<?php

    session_start();

    $catagory = $_GET['catagory'];
//echo $catagory;

    $_SESSION['catagory'] = $catagory;
//echo $_SESSION['catagory'];

    header("Location:community-page-02.php");
    exit;
?>