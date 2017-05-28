<?php

    include("dbConnection.php");

    $catagory = $_GET['catagory'];


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

    <title>Catagory | StudyJam</title>

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
            <li <?php if($catagory === 'Development') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Development" >Development</a></li>
            <li <?php if($catagory === 'IT') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=IT" >IT</a></li>
            <li <?php if($catagory === 'Web') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Web">Web</a></li>
            <li <?php if($catagory === 'Business') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Business">Business</a></li>
            <li <?php if($catagory === 'Design') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Design">Design</a></li>
            <li <?php if($catagory === 'Marketing') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Marketing">Marketing</a></li>
            <li <?php if($catagory === 'Photography') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Photography">Photography</a></li>
            <li <?php if($catagory === 'Health') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Health">Health</a></li>
            <li <?php if($catagory === 'Music') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Music">Music</a></li>
            <li <?php if($catagory === 'Language') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Language">Language</a></li>
            <li <?php if($catagory === 'Life Style') echo 'class="active"'; ?> ><a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Life Style">Life Style</a></li>
            
          </ul>
          
        </div>
        <div class="col-sm-9 col-md-10 col-xs-9">
         
          <!-- course overview
            ================================= -->

            <div id="browse-all-course">
               
               
               
               
               
               <?php
                
                
                    // for getting courseID's
                    $query = "SELECT courseID FROM after_taken_course_table WHERE catagory = '$catagory'";

                    $result = mysqli_query($con,$query);

                    //$row = mysqli_fetch_assoc($result);

                    //$courseID = $rowforImage['courseID'];
                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                        // for every courseID
                        $courseID = $row['courseID'];
                        
                        $query = "SELECT courseName FROM `after_taken_course_table` WHERE courseID = $courseID";
                        
                        $resultforCourseName = mysqli_query($con,$query);
                        
                        $rowforCourseName = mysqli_fetch_assoc($resultforCourseName);
                        
                        $courseName = $rowforCourseName['courseName'];
                        
                        
                        //
                        // for course description
                        $query = "SELECT courseDescription FROM overview_page_table WHERE courseIDInOverviewPage = $courseID";
                        
                        $resultforCourseDescription = mysqli_query($con,$query);
                        
                        $rowforCourseDescription = mysqli_fetch_assoc($resultforCourseDescription);
                        
                        $courseDescription = $rowforCourseDescription['courseDescription'];
                        
                        
                        
                        // for course enrolled number
                        $query = "SELECT courseEnrolledNumber FROM overview_page_table WHERE courseIDInOverviewPage = $courseID";
                        
                        $resultforCourseEnroll = mysqli_query($con,$query);
                        
                        $rowforCourseEnroll = mysqli_fetch_assoc($resultforCourseEnroll);
                        
                        $courseEnrolledNumber = $rowforCourseEnroll['courseEnrolledNumber'];
                        
                        

                        // for course ratting number
                        $query = "SELECT averageRatting FROM overview_page_table WHERE courseIDInOverviewPage = $courseID";
                        
                        $resultforRatting = mysqli_query($con,$query);
                        
                        $rowforRatting = mysqli_fetch_assoc($resultforRatting);
                        
                        $averageRatting = $rowforRatting['averageRatting'];
                        
                        //echo $averageRatting.' '.floor($averageRatting).' '.round($averageRatting);
                        
                        $temp1 = $averageRatting - floor($averageRatting);
                        $temp2 = round($averageRatting) - $averageRatting;
                        
                        if($temp1 > $temp2)
                            $averageRatting = round($averageRatting);
                        else
                            $averageRatting = floor($averageRatting);
                        
                        
                            /*need to coplete*/
                            
                            
                            
                        // for course lecture number
                        $query = "SELECT lectureNumber FROM overview_page_table WHERE courseIDInOverviewPage = $courseID";
                        
                        $resultforLectureNumber = mysqli_query($con,$query);
                        
                        $rowforLectureNumber = mysqli_fetch_assoc($resultforLectureNumber);
                        
                        $lectureNumber = $rowforLectureNumber['lectureNumber'];
                        
                        
                        
                        // for course lecture hour
                        $query = "SELECT videoInHours FROM overview_page_table WHERE courseIDInOverviewPage = $courseID";
                        
                        $resultforLectureHour = mysqli_query($con,$query);
                        
                        $rowforLectureHour = mysqli_fetch_assoc($resultforLectureHour);
                        
                        $videoInHours = $rowforLectureHour['videoInHours']; 
                        
                       
                    
                        // for course fee
                        $query = "SELECT cost FROM overview_page_table WHERE courseIDInOverviewPage = $courseID";
                        
                        $resultforCost = mysqli_query($con,$query);
                        
                        $rowforCost = mysqli_fetch_assoc($resultforCost);
                        
                        $cost = $rowforCost['cost'];
                        
                        
                        $query = "SELECT costOffInPercentage FROM overview_page_table WHERE courseIDInOverviewPage = $courseID";
                        
                        $resultforCostOff = mysqli_query($con,$query);
                        
                        $rowforCostOff = mysqli_fetch_assoc($resultforCostOff);
                        
                        $costOffInPercentage = $rowforCostOff['costOffInPercentage'];
                        
                        $finalCost = $cost - (($cost * $costOffInPercentage)/100);
                        
                        
                        
                    // for image URL
                    $query = "SELECT coursePromoImageURL FROM course_status_table WHERE courseIDInStatus = $courseID";

                    $resultforImage = mysqli_query($con,$query);

                    $rowforImage = mysqli_fetch_assoc($resultforImage);

                    $coursePromoImageURL = $rowforImage['coursePromoImageURL'];
                    //echo $coursePromoImageURL;
                        
                        
                        
                        
                        
                        
                        echo '
                <div class="single-course-overview">
                   <h2 class="single-course-title">'.$courseName.'</h2>
                   <div class="row">
                       <div class="col-md-3">
                           <img src="'.$coursePromoImageURL.'" alt="course-image">
                       </div>
                       <div class="col-md-9">
                           <p class="single-course-discription">'.$courseDescription.'</p>
                       </div>
                   </div>
                    
                    
                    <div class="row">
                        <div class="col-md-3 browse-all-course-rating-and-enrolled-number">
                          <div class="row">
                              <div class="col-md-8">';
                
                                for($i = 0; $i < $averageRatting; $i++)
                                    echo '<i class="glyphicon glyphicon-star-empty"> </i>';
                                   
                     echo '              
                              </div>
                              <div class="col-md-2">
                                  <p class="browse-all-course-single-course-price">$'.$finalCost.'</p>
                              </div>
                          </div>
                           
                           
                            <p class="student-enrolled-number">
                                '.$courseEnrolledNumber.' student\'s enrolled
                            </p>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <p class="browse-all-course-single-course-lecture-details">'.$lectureNumber.' lectures || '.$videoInHours.' hours</p>
                        </div>
                        <div class="col-md-3">
                            <p>
                                <a id="view-details-click" href="set-active-class-and-others-on-catagory-page-3.php?courseID='.$courseID.'">view details....</a>
                            </p>
                        </div>
                    </div>

                    
                    
                </div><hr>';
                        
                        
                        
                        
                        
                        
                    }
                    
                
                    
                    
                    
                
                
                
                
                
                    
                    
                
                
                
                
                
                
                ?>
               
               
               
               
               
               
               
               
               
               
                <div class="single-course-overview">
                   <h2 class="single-course-title">Course title</h2>
                   <div class="row">
                       <div class="col-md-3">
                           <img src="images/catagory-2.jpg" alt="course-image">
                       </div>
                       <div class="col-md-9">
                           <p class="single-course-discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere repellat consectetur molestiae rerum ipsam, necessitatibus voluptate doloremque error quis adipisci nobis animi enim, fuga qui quam soluta recusandae tenetur vero.</p>
                       </div>
                   </div>
                    
                    
                    <div class="row">
                        <div class="col-md-3 browse-all-course-rating-and-enrolled-number">
                          <div class="row">
                              <div class="col-md-8">
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                              </div>
                              <div class="col-md-2">
                                  <p class="browse-all-course-single-course-price">$17</p>
                              </div>
                          </div>
                           
                           
                            <p class="student-enrolled-number">
                                64156 student's enrolled
                            </p>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <p class="browse-all-course-single-course-lecture-details">58 lectures || 5.6 hours</p>
                        </div>
                        <div class="col-md-3">
                            <p>
                                <a id="view-details-click" href="course-lecture-page1.html">view details....</a>
                            </p>
                        </div>
                    </div>

                    
                    
                </div>
                
                <hr>
                
                <div class="single-course-overview">
                   <h2 class="single-course-title">Course title</h2>
                   <div class="row">
                       <div class="col-md-3">
                           <img src="images/catagory-4.jpg" alt="course-image">
                       </div>
                       <div class="col-md-9">
                           <p class="single-course-discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere repellat consectetur molestiae rerum ipsam, necessitatibus voluptate doloremque error quis adipisci nobis animi enim, fuga qui quam soluta recusandae tenetur vero.</p>
                       </div>
                   </div>
                    
                    
                    <div class="row">
                        <div class="col-md-3 browse-all-course-rating-and-enrolled-number">
                          <div class="row">
                              <div class="col-md-8">
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   
                              </div>
                              <div class="col-md-2">
                                  <p class="browse-all-course-single-course-price">$200</p>
                              </div>
                          </div>
                           
                           
                            <p class="student-enrolled-number">
                                6416 student's enrolled
                            </p>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <p class="browse-all-course-single-course-lecture-details">58 lectures || 15.8 hours</p>
                        </div>
                        <div class="col-md-3">
                            <p>
                                <a id="view-details-click" href="course-lecture-page1.html">view details....</a>
                            </p>
                        </div>
                    </div>

                    
                    
                </div>
                
                <hr>
                
                <div class="single-course-overview">
                   <h2 class="single-course-title">Course title</h2>
                   <div class="row">
                       <div class="col-md-3">
                           <img src="images/catagory-5.jpg" alt="course-image">
                       </div>
                       <div class="col-md-9">
                           <p class="single-course-discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere repellat consectetur molestiae rerum ipsam, necessitatibus voluptate doloremque error quis adipisci nobis animi enim, fuga qui quam soluta recusandae tenetur vero.</p>
                       </div>
                   </div>
                    
                    
                    <div class="row">
                        <div class="col-md-3 browse-all-course-rating-and-enrolled-number">
                          <div class="row">
                              <div class="col-md-8">
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                                   <i class="glyphicon glyphicon-star-empty"> </i>
                              </div>
                              <div class="col-md-2">
                                  <p class="browse-all-course-single-course-price">Free</p>
                              </div>
                          </div>
                           
                           
                            <p class="student-enrolled-number">
                                641561 student's enrolled
                            </p>
                        </div>
                        
                        
                        <div class="col-md-6">
                            <p class="browse-all-course-single-course-lecture-details">58 lectures || 10 hours</p>
                        </div>
                        <div class="col-md-3">
                            <p>
                                <a id="view-details-click" href="course-lecture-page1.html">view details....</a>
                            </p>
                        </div>
                    </div>

                    
                    
                </div>
                
                
                <!--<nav>-->
                  <ul class="pagination pagination-right">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                <!--<nav>-->
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
