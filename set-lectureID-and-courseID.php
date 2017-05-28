<?php

session_start();
    
    //echo "hay";

    //if($_GET['add'] == 'car'){
      $lectureID = $_GET['lecture'];
      //echo $lectureID."  ";

      $_SESSION['lectureID'] = $lectureID;
      //echo $_SESSION['lectureID'];
      
      //echo $_SESSION['lecuteID'];
    //}


    header("Location: after-taken-course-course-content.php");
    exit;


?>