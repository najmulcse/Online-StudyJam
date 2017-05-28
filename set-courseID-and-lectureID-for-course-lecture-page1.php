<?php
include("dbConnection.php");
session_start();
    


     if(!(isset($_SESSION['valid_email']) && $_SESSION['valid_email'] != ''))
    {
     header("Location:login.php");
    exit;
    }
    //echo "hay";

    //if($_GET['add'] == 'car'){
      $courseID = $_GET['courseID'];
      //echo $lectureID."  ";
      $query = "SELECT lectureID from after_taken_course_course_content_table where courseIDInCourseContent = $courseID ";
      $result = mysqli_query($con,$query);
      $row = mysqli_fetch_assoc($result);
      $lecture = $row['lectureID'];
      
      $_SESSION['lectureID'] = $lecture;
      $_SESSION['courseID'] = $courseID;
      //echo $lecture;

//echo $_SESSION['lectureID'].'   '.$_SESSION['courseID'];
      //echo $_SESSION['lectureID'];
      
      //echo $_SESSION['lecuteID'];
    //}


    header("Location: after-taken-course-course-content.php");
    exit;


?>