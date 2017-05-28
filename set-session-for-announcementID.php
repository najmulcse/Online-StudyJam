<?php 
//view-details-click
    session_start();

    $announcementID = $_GET['announcementID'];

    $_SESSION['announcementID'] = $announcementID;

    header("Location: after-taken-course-announcement-view-details.php");
    exit;
//echo $announcementID;
//set-session-for-announcementID.php?announcementID='.$announcementID.'
//after-taken-course-announcement-view-details.html

?>