<?php

    session_start();

    $courseID = $_GET['courseID'];

    $_SESSION['courseID'] = $courseID;

    header("Location: course-lecture-page1.php");
    exit;
?>