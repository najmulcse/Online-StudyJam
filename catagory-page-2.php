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

    $catagory = $_SESSION['catagory'];
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
         
         <div id="catagory-page-landing">
             
             
             <?php
             
                $popular[0] = 0;
                $free[0] = 0;
                $new[0] = 0;
                $upComing[0] = 0;
             
             
                // for selecting courseID according to catagory
                $query = "SELECT courseID FROM after_taken_course_table WHERE catagory = '$catagory'";

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
                    
                    if($courseStatus === "Popular")
                        $popular[$popularLoopControl++] = $courseID;
                    else if($courseStatus === "Free")
                        $free[$freeLoopControl++] = $courseID;   
                    else if($courseStatus === "New")
                        $new[$newLoopControl++] = $courseID;
                    else if($courseStatus === "UpComing")
                        $upComing[$upComingLoopControl++] = $courseID;
                    //echo $popular[1];
                }

             //echo $catagory;
                // for Popular catagory
             
                echo '
                    <div class="single-catagory-display">
                         <div class="row">
                             <div class="col-sm-10">
                                 <h4>Popular</h4>
                             </div>
                             <div class="col-sm-2">
                                 <a href="browse-all-course-for-a-catagory.php?catagory='.$catagory.'"><input class="btn btn-default" type="button" value="View All"></a>
                             </div>
                         </div>
                        <div class="row catagory-image">';
             
                $j = 1;
             
                
                // now database contains only one course of popular catagory of Development so here $i = 1
                for($i = 1; $i<$popularLoopControl ; $i++)
                {
                    $courseIDforPopular = $popular[$i];
                        
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
             
                echo '</div>
                    </div><br><br><!--end single catagory-->';
             
                
             
             
             
             
             
                // for Free catagory
             
                /*echo '
                    <div class="single-catagory-display">
                         <div class="row">
                             <div class="col-sm-10">
                                 <h4>Free</h4>
                             </div>
                             <div class="col-sm-2">
                                 <a href="browse-all-course-for-a-catagory.php?catagory='.$catagory.'"><input class="btn btn-default" type="button" value="View All"></a>
                             </div>
                         </div>
                        <div class="row catagory-image">';
             
                $j = 1;
             
                
                // now database contains only one course of popular catagory of Development so here $i = 1
                for($i = 1; $i<= 1; $i++)
                {
                    $courseIDforFree = $free[$i];
                        
                    // for image URL
                    $query = "SELECT coursePromoImageURL FROM course_status_table WHERE courseIDInStatus = $courseIDforfree";

                    $resultforImage = mysqli_query($con,$query);

                    $rowforImage = mysqli_fetch_assoc($resultforImage);

                    $coursePromoImageURL = $rowforImage['coursePromoImageURL'];

                    if($j <=3 )
                    {
                        echo '
                            <div class="col-sm-4">
                                <a href="set-active-class-and-others-on-catagory-page-1.php?courseID='.$courseIDforFree.'">
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
                                <a href="set-active-class-and-others-on-catagory-page-1.php?courseID='.$courseIDforFree.'">
                                    <img src="'.$coursePromoImageURL.'" alt="catagory-image-1">
                                </a>
                            </div>';
                    }
                }
             
                echo '</div>
                    </div><br><br><!--end single catagory-->';
             
             */
             
             
             
             
             
             
             
             
             
             
                // for New catagory
             
                echo '
                    <div class="single-catagory-display">
                         <div class="row">
                             <div class="col-sm-10">
                                 <h4>New</h4>
                             </div>
                             <div class="col-sm-2">
                                 <a href="browse-all-course-for-a-catagory.php?catagory='.$catagory.'"><input class="btn btn-default" type="button" value="View All"></a>
                             </div>
                         </div>
                        <div class="row catagory-image">';
             
                $j = 1;
             
                
                // now database contains only one course of popular catagory of Development so here $i = 1
                for($i = 1; $i< $freeLoopControl; $i++)
                {
                    $courseIDforNew = $new[$i];
                        
                    // for image URL
                    $query = "SELECT coursePromoImageURL FROM course_status_table WHERE courseIDInStatus = $courseIDforNew";

                    $resultforImage = mysqli_query($con,$query);

                    $rowforImage = mysqli_fetch_assoc($resultforImage);

                    $coursePromoImageURL = $rowforImage['coursePromoImageURL'];

                    if($j <=3 )
                    {
                        echo '
                            <div class="col-sm-4">
                                <a href="set-active-class-and-others-on-catagory-page-1.php?courseID='.$courseIDforNew.'">
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

                         <div class="col-sm-4">
                                <a href="set-active-class-and-others-on-catagory-page-1.php?courseID='.$courseIDforNew.'">
                                    <img src="'.$coursePromoImageURL.'" alt="catagory-image-1">
                                </a>
                            </div>';
                    }
                }
             
                echo '</div>
                    </div><br><br><!--end single catagory-->';
             
             
             
             
             
             
             
             
             
             
             
             
                // for UpComing catagory
             
               /* echo '
                    <div class="single-catagory-display">
                         <div class="row">
                             <div class="col-sm-10">
                                 <h4>UpComing</h4>
                             </div>
                             <div class="col-sm-2">
                                 <a href="browse-all-course-for-a-catagory.php?catagory='.$catagory.'"><input class="btn btn-default" type="button" value="View All"></a>
                             </div>
                         </div>
                        <div class="row catagory-image">';
             
                $j = 1;
             
                
                // now database contains only one course of popular catagory of Development so here $i = 1
                for($i = 1; $i<= 1; $i++)
                {
                    $courseIDforUpComing = $upComing[$i];
                        
                    // for image URL
                    $query = "SELECT coursePromoImageURL FROM course_status_table WHERE courseIDInStatus = $courseIDforUpComing";

                    $resultforImage = mysqli_query($con,$query);

                    $rowforImage = mysqli_fetch_assoc($resultforImage);

                    $coursePromoImageURL = $rowforImage['coursePromoImageURL'];

                    if($j <=3 )
                    {
                        echo '
                            <div class="col-sm-4">
                                <a href="set-active-class-and-others-on-catagory-page-1.php?courseID='.$courseIDforUpComing.'">
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
                                <a href="set-active-class-and-others-on-catagory-page-1.php?courseID='.$courseIDforUpComing.'">
                                    <img src="'.$coursePromoImageURL.'" alt="catagory-image-1">
                                </a>
                            </div>';
                    }
                }
             
                echo '</div>
                    </div><br><br><!--end single catagory-->';
                */
             
             ?>
             
             
             <div class="single-catagory-display">
                 <div class="row">
                     <div class="col-sm-10">
                         <h4>Popular</h4>
                     </div>
                     <div class="col-sm-2">
                         <a href="browse-all-course-for-a-catagory.html"><input class="btn btn-default" type="button" value="View All"></a>
                     </div>
                 </div>
                 
                 <div class="row catagory-image">
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-1.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-2.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-4.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                 </div><br>
                 
                 
                 <div class="row catagory-image">
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-5.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-6.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-7.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                 </div>
             </div><br><br><!--end single catagory-->
             
             
             
             
             <div class="single-catagory-display">
                 <div class="row">
                     <div class="col-sm-10">
                         <h4>Free</h4>
                     </div>
                     <div class="col-sm-2">
                         <a href="browse-all-course-for-a-catagory.html"><input class="btn btn-default" type="button" value="View All"></a>
                     </div>
                 </div>
                 
                 
                 <div class="row catagory-image">
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-5.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-6.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-7.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                 </div><br>
                 
                 <div class="row catagory-image">
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-1.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-2.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-4.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                 </div>
                 
                 
                 
             </div><br><br><!--end single catagory-->
             
             
             
             
             <div class="single-catagory-display">
                 <div class="row">
                     <div class="col-sm-10">
                         <h4>New</h4>
                     </div>
                     <div class="col-sm-2">
                         <a href="browse-all-course-for-a-catagory.html"><input class="btn btn-default" type="button" value="View All"></a>
                     </div>
                 </div>
                 
                 <div class="row catagory-image">
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-1.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-5.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-4.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                 </div><br>
                 
                 
                 <div class="row catagory-image">
                   
                   <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-2.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-6.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-7.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                 </div>
             </div><br><br><!--end single catagory-->
             
             
             
             <div class="single-catagory-display">
                 <div class="row">
                     <div class="col-sm-10">
                         <h4>UpComing</h4>
                     </div>
                     <div class="col-sm-2">
                         <a href="browse-all-course-for-a-catagory.html"><input class="btn btn-default" type="button" value="View All"></a>
                     </div>
                 </div>
                 
                 <div class="row catagory-image">
                   <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-4.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-2.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                   
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-1.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                  
                 </div><br>
                 
                 
                 <div class="row catagory-image">
                   <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-7.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-6.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                    
                    <div class="col-sm-4">
                        <a href="course-lecture-page1.html">
                            <img src="images/catagory-5.jpg" alt="catagory-image-1">
                        </a>
                    </div>
                 </div>
             </div><br><br><!--end single catagory-->
             
             
             
             
             
             
             
             
             
             
             
             <div class="row">
                 <div class="col-sm-10">
                     <?php echo '<a href="browse-all-course-for-a-catagory.php?catagory='.$catagory.'">'; ?> <button type="button" class="btn btn-success catagory-btn-size">Browse All Courses</button></a>
                 </div>
             </div>
             
       
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
