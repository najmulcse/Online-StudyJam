<?php

    include("dbConnection.php");

    session_start();

    //$courseID = $_SESSION['courseID'];
    //echo $courseID;

    // for course catagory detecting
    //$query = "SELECT catagory FROM after_taken_course_table WHERE courseID = $courseID";

    //$result = mysqli_query($con,$query);

    //$row = mysqli_fetch_assoc($result);

    //$catagory = $row['catagory'];
    //$catagory = 'Business';
    //$catagory = 'IT';
    //echo $catagory;

    //$catagory = $_SESSION['catagory'];
   
  
    $search_item = $_SESSION['search_item'];
    //echo ' '.$catagory;
    //echo $catagory;

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Search | StudyJam</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
     <section>
         <div>
               <?php 
                if(!(isset($_SESSION['valid_email']) && $_SESSION['valid_email'] != ''))
                {
                 $email ="";
                 include("include/navigationwithoutLogin.php"); 

                }
                 else
                      include("include/navigation.php");

               ?>
        </div>
   </section>
     
      <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 col-xs-3 ">
          <ul class="nav nav-sidebar">
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Development" >Development</a></li>
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=IT" >IT</a></li>
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Web">Web</a></li>
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Business">Business</a></li>
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Design">Design</a></li>
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Marketing">Marketing</a></li>
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Photography">Photography</a></li>
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Health">Health</a></li>
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Music">Music</a></li>
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Language">Language</a></li>
            <li><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Life Style">Life Style</a></li>
            
          </ul>
          </div>
      
         
             <div class="col-sm-9 col-md-10 col-xs-9">
         
                <div id="catagory-page-landing">
                  
                   <?php 
                    //$query= " SELECT * FROM after_taken_course_table WHERE courseName LIKE '%$search_item%' ";
                   // $search_query = mysqli_query($con,$query);
                    
                  //  if(!$search_query)
                   // {
                    //    echo "Query failed.";
                 //   }
                    
                    
                    
                    
                    
                $popular[0] = 0;
                $free[0] = 0;
                $new[0] = 0;
                $upComing[0] = 0;
                $totall_search_found[0]=0;    
             
             
                // for selecting courseID according to catagory
                $query = "SELECT courseID FROM after_taken_course_table WHERE courseName LIKE '%$search_item%' ";

                $result = mysqli_query($con,$query);

                $popularLoopControl = $freeLoopControl = $newLoopControl = $upComingLoopControl = 1;
             
                while($row = mysqli_fetch_assoc($result))
                {
                    
                    $courseID = $row['courseID'];
                    
                    
                    $query = "SELECT courseStatus FROM `course_status_table` WHERE courseIDInStatus = $courseID";

                    $resultforCourseID = mysqli_query($con,$query);
                    
                    $rowforCourseID = mysqli_fetch_assoc($resultforCourseID);
                    
                    $courseStatus = $rowforCourseID['courseStatus'];
                    //echo $courseStatus;
                    
                    
                        $totall_search_found[$upComingLoopControl++] = $courseID;
                    //echo $popular[1];
                }

             //echo $catagory;
                // for Popular catagory
             if($upComingLoopControl>1){
                echo '
                    <div class="single-catagory-display">
                         <div class="row">
                             <div class="col-sm-10">
                                 <h4>We found thats</h4>
                             </div>
                             
                         </div>
                        <div class="row catagory-image">';
             
                $j = 1;
             
                
                // now database contains only one course of popular catagory of Development so here $i = 1
                for($i = 1; $i<$upComingLoopControl; $i++)
                {
                    $courseIDforPopular = $totall_search_found[$i];
                        
                    // for image URL
                    $query = "SELECT coursePromoImageURL FROM course_status_table WHERE courseIDInStatus = $courseIDforPopular";

                    $resultforImage = mysqli_query($con,$query);

                    $rowforImage = mysqli_fetch_assoc($resultforImage);

                    $coursePromoImageURL = $rowforImage['coursePromoImageURL'];

                    if($j <=3 )
                    {
                        echo '
                            <div class="col-sm-4">
                                <a href="set-active-class-and-others-on-catagory-page-1.php?courseID='.$courseIDforPopular.'">
                                    <img src="'.$coursePromoImageURL.'" alt="catagory-image-1">
                                </a>
                            </div>';
                        $j++;
                    }
                    else
                    {
                        $j = 2;

                         echo '
                         </div><br>

                         <div class="row catagory-image"
                            <div class="col-sm-4">
                                <a href="set-active-class-and-others-on-catagory-page-1.php?courseID='.$courseIDforPopular.'">
                                    <img src="'.$coursePromoImageURL.'" alt="catagory-image-1">
                                </a>
                            </div>';
                    }
                }
             
                 
                 }
                    else
                        
                echo '</div>
                     <h2> Result not found.</h2>
                    </div><br><br><!--end single catagory-->';
             
                
             
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    ?>
             
                </div>
             </div>
        </div>
     </div>  
      </section> 
      <div id="footer">
        <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Support</a></li>
        </ul>
        <p>© Online StudyJam - 2016</p>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <!-- jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
    <!-- custom js 
    <script>
            $(document).ready(function(){
                $("#view-details-click").click(function(){
                $("#asking-history").replaceWith("");
            });
});
    </script>-->
  </body>
</html>
