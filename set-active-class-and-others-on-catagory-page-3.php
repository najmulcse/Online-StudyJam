<?php

    session_start();

    $courseID = $_GET['courseID'];
echo $courseID;

    $_SESSION['courseID'] = $courseID;
//echo $_SESSION['catagory'];

    header("Location: course-lecture-page1.php");
    exit;
?>