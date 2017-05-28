<?php

    session_start();

    $catagory = $_GET['catagory'];
echo $catagory;

    $_SESSION['catagory'] = $catagory;
//echo $_SESSION['catagory'];

    header("Location: catagory-page-2.php");
    exit;
?>