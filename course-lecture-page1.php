<?php include("dbConnection.php") ?>


<?php
    
    session_start();
    
    //global $con;
    
    $courseID = $_SESSION['courseID'];
   $lectureID = $_SESSION['lectureID'];
    
    // for courseName

    $query = "select after_taken_course_table.courseName from after_taken_course_table,overview_page_table where after_taken_course_table.courseID = overview_page_table.courseIDInOverviewPage AND overview_page_table.courseIDInOverviewPage = $courseID";
    
    $result = mysqli_query($con,$query);
    
    $row = mysqli_fetch_assoc($result);
    
    $heading = $row['courseName'];

    
    // for averageRatting

    $query = "SELECT averageRatting FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $averageRatting = round($row['averageRatting']);

    $showAverageRatting = $row['averageRatting'];


    // for enrolledNumber

    $query = "SELECT courseEnrolledNumber FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $courseEnrolledNumber = $row['courseEnrolledNumber'];


    // for promo video url

    $query = "SELECT previewVideoURL FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $previewVideoURL = $row['previewVideoURL'];

    // to split the string
    $pieces = explode("\\", $previewVideoURL);

    
    // to replace space with underscore and %20
    $pieces[0] = preg_replace('/\s+/', '_', $pieces[0]);
    $pieces[1] = preg_replace('/\s+/', '_', $pieces[1]);
    $pieces[2] = preg_replace('/\s+/', '_', $pieces[2]);
    $pieces[3] = preg_replace('/\s+/', '_', $pieces[3]);
    $pieces[4] = preg_replace('/\s+/', '%20', $pieces[4]);

    $previewVideoURL = "";

    for($i = 0; $i<5; $i++)
    {
        if($i != 0 )
        {
            $previewVideoURL.='\\';
            $previewVideoURL.= $pieces[$i];
        }
        else
            $previewVideoURL.= $pieces[$i];
            
    }

    

    // for cost

    $query = "SELECT cost FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $cost = $row['cost'];


    // for costOffInPercentage

    $query = "SELECT costOffInPercentage FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $costOffInPercentage = $row['costOffInPercentage'];

    
    $presentCost = $cost - ($cost * ($costOffInPercentage / 100));
    

    // for lecureNumber

    $query = "SELECT lectureNumber FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $lectureNumber = $row['lectureNumber'];



    // for videoHours

    $query = "SELECT videoInHours FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $videoInHours = $row['videoInHours'];


    // for skillLevel

    $query = "SELECT skillLevel FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $skillLevel = $row['skillLevel'];



    // for language

    $query = "SELECT language FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $language = $row['language'];


    // for courseDescription

    $query = "SELECT courseDescription FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $courseDescription = $row['courseDescription'];

    $courseDescription = str_replace("\n", "<br>", $courseDescription);



    // for requirements

    $query = "SELECT requirement FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $requirement = $row['requirement'];


    // for whatWillGet

    $query = "SELECT whatWillGetFromCourse FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $whatWillGetFromCourse = $row['whatWillGetFromCourse'];


    // for targetAudience

    $query = "SELECT targetAudience FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $targetAudience = $row['targetAudience'];


    // for numberOfLectures of a courseID exists in table
    
    $query = "SELECT lectureID FROM `after_taken_course_course_content_table` WHERE courseIDInCourseContent = $courseID";

    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $lectureID = $row['lectureID'];
    //echo $lectureID;

    $num_rows = mysqli_num_rows($result);
    



    // for instructor image

    $query = "SELECT instructorPhoto FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $instructorPhoto = $row['instructorPhoto'];



    // for instructor name

    $query = "SELECT instructorName FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $instructorName = $row['instructorName'];



    // for instructor designation

    $query = "SELECT instructorDesignation FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $instructorDesignation = $row['instructorDesignation'];



    // for instructor discription

    $query = "SELECT instructorDescription FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $instructorDescription = $row['instructorDescription'];

    $instructorDescription = str_replace("\n", "<br>", $instructorDescription);


    // for stars

    $query = "SELECT 5Stars  FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $Stars5 = $row['5Stars'];



    $query = "SELECT 4Stars  FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $Stars4 = $row['4Stars'];



    $query = "SELECT 3Stars  FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $Stars3 = $row['3Stars'];



    $query = "SELECT 2Stars  FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $Stars2 = $row['2Stars'];



    $query = "SELECT 1Stars  FROM `overview_page_table` WHERE courseIDInOverviewPage = $courseID";
        
    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $Stars1 = $row['1Stars'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=devic-width ,initial-scale=1.0" >
        <link rel="stylesheet" type="text/css" href="queries.css">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,300italic' rel='stylesheet' type='text/css'>
        
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Course lectures</title>
        

  </head>

  <body>
    <div id="profile-default">
  <?php 
    if(!(isset($_SESSION['valid_email']) && $_SESSION['valid_email'] != ''))
    {
     $email ="";
     include("include/navigationwithoutLogin.php"); 
     
    }
     else
          include("include/navigation.php");
        
   ?>
  <section>
      <div class="row">
          <div class="col-sm-1 col-md-1 col-xs-1">
          </div>
       <div class="col-sm-10 col-md-10col-xs-10 rating-icon">
           <h2><?php echo $heading; ?></h2>
           
               <?php
                    
                    for($i = 0; $i<$averageRatting; $i++)
                    {
                        echo '<i class="glyphicon glyphicon-star-empty"> </i> ';
                    }
                    
                ?>
           
               
           <p><?php echo $showAverageRatting; ?>(44 rattings ), <?php echo $courseEnrolledNumber; ?> students enrolled.</p>
           
      </div>
    </div>
               
 </section>
        
     <section>
         <div class="row">
                  <div class="col-sm-1 col-md-1 col-xs-1">
                  </div>
                  <div class="col-sm-7 col-md-7 col-xs-7">
                      <video width="700" height="415" controls>
                          <!--<source src="courseContent\Development\Web_Development\1\Promo%20Video.mp4" type="video/mp4">-->
                          
                          <?php echo '<source src="'.$previewVideoURL.'" type="video/mp4">' ?>
                          
                          
                      </video>
                 </div>
                 <div class="col-sm-4 col-md-4 col-xs-4 rating-icon premium">
                     
                     <?php
                        
                            $_SESSION['courseID'] = $courseID;   
                            $_SESSION['lectureID'] = $lectureID;  
                          
                          
                          
                          echo '<a href="set-courseID-and-lectureID-for-course-lecture-page1.php?courseID='.$courseID.'"><button onclick="#" type="submit" class="btn btn-success btn-lg">Take this course </button></a><br>';
    
                     ?>
                     
                     <!--<a href="set-lectureID-and-courseID.php"><button onclick="#" type="submit" class="btn btn-success btn-lg">Take this course </button></a><br>-->
                     
                     
                     
                     
                       
                       
                     
                     
                     <p style="font-size: 25px"><?php echo '$'.$presentCost.' ' ?></p>
                     <p style="text-decoration: line-through"> <?php echo '$'.$cost ?> </p>
                     <p class="off"> (<?php echo $costOffInPercentage ?>% off)</p>  <br>   
                     <a href="#">Start free preview</a>   
                     <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">More option
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Gift this course</a></li>
                            <li><a href="#">Buy for my team</a></li>

                          </ul>
                    </div>
                    <hr>
                     <div class="row">
                         <div class="col-sm-4 col-md-4 col-xs-4">
                                <p>Lecture      </p>  
                         </div> 
                         <div class="col-sm-8 col-md-8 col-xs-8">
                                <p><?php echo $lectureNumber ?></p>
                         </div>
                         
                        
                         <div class="col-sm-4 col-md-4 col-xs-4">
                                <p>Video      </p>  
                         </div> 
                         <div class="col-sm-8 col-md-8 col-xs-8">
                                <p><?php echo $videoInHours ?> hours</p>
                         </div>
                        <div class="col-sm-4 col-md-4 col-xs-4">
                                <p>Skill level      </p>  
                         </div> 
                         <div class="col-sm-8 col-md-8 col-xs-8">
                                <p><?php echo $skillLevel ?></p>
                         </div>
                         
                        
                         <div class="col-sm-4 col-md-4 col-xs-4">
                                <p>Language      </p>  
                         </div> 
                         <div class="col-sm-8 col-md-8 col-xs-8">
                                <p><?php echo $language ?></p>
                         </div>
                         
                         <div class="col-sm-4 col-md-4 col-xs-4">
                                <p>Includes      </p>  
                         </div> 
                         <div class="col-sm-8 col-md-8 col-xs-8">
                                <p>Lifetime access</p>
                                <p>30 days money back guarantee</p>
                                <p>Available on iOS and Android</p>
                                <p>Certificate of Completion </p>
                         </div>
                         
                        
                         
                 </div>
                 
             </div>
      </div>
    </section>        
    
    <section>
         <div class="row">
             <div class="col-sm-1 col-md-1 col-xs-1"></div>
             <div class="col-sm-11 col-md-11 col-xs-11">
             <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#about-course">About this course</a></li>
                    <li><a data-toggle="tab" href="#curriculum">Curriculum</a></li>
                    <li><a data-toggle="tab" href="#instructor">Instructor</a></li>
                    <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
            </ul>
                 <div class="tab-content">
                        <div id="about-course" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-sm-8 col-md-8 col-xs-8">
                                    <h2>About this course</h2>
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-4">
                                
                                 </div>
                            </div>
                          <h3>Course description</h3>
                          
                          <p style="font-size: 2.1vh"> <?php echo $courseDescription; ?> </p>
                            <br>
                            <h3>What are the requirements?</h3>
                               <ul>
                               
                               <?php echo $requirement; ?>
                               
                            </ul>
                            <h3>What am I going to get from this course?</h3>
                               <ul>
                                
                                <?php echo $whatWillGetFromCourse ?>
                                
                            </ul>
                                <h3>What is the target audience?</h3>
                                 <ul>
                               
                                  <?php echo $targetAudience ?>
                              
                            </ul>
                        </div>
                            <div id="curriculum" class="tab-pane fade curricl-icon">
                                  <h3>Curriculum</h3> <hr>
                                   
                                    
                                    
                                    <?php

                                        $sectionNo = 1;
    
                                        for($i=1;$i<=$num_rows;)
                                        {
                                            
                                            // get number of lecture of a section
                                            $query = "SELECT * FROM `after_taken_course_course_content_table` WHERE sectionID = $sectionNo and courseIDInCourseContent = $courseID ";
                                            
                                            $result = mysqli_query($con,$query);
                                            
                                            $sectionContentNumber = mysqli_num_rows($result);
                                            
                                            
                                            
                                                // get section heading
                                                $query = "SELECT sectionHeading FROM `after_taken_course_course_content_table` WHERE sectionID = $sectionNo and courseIDInCourseContent = $courseID";
                                            
                                                $result = mysqli_query($con,$query);
                                            
                                                $row = mysqli_fetch_assoc($result);
                                            
                                                $sectionHeading = $row['sectionHeading'];
                                            
                                                echo '<h3>Section '.$sectionNo.': '.$sectionHeading.'</h3><br>';
                                            
                                            for($j = 1; $j <=$sectionContentNumber; $j++)
                                            {
                                                
                                                // get lecture heading
                                                $query = "SELECT lectureHeading FROM `after_taken_course_course_content_table` WHERE lectureID = $lectureID";
                                            
                                                $result = mysqli_query($con,$query);
                                            
                                                $row = mysqli_fetch_assoc($result);
                                            
                                                $lectureHeading = $row['lectureHeading'];
                                                
                                              
                                                
                                                
                                                
                                                
                                                echo '
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <i class="glyphicon glyphicon-play-circle"> </i>
                                                            Lecture:'.$j.'
                                                        </div>
                                                        <div class="col-sm-10">
                                                                '.$lectureHeading.'<br>
                                                        </div>
                                                    </div><hr>
                                                ';
                                                
                                                $i++;
                                                $lectureID++;
                                            }
                                           
                                            $sectionNo++;
                                           
                                        }
            
                                    ?>
                            </div>
                        <div id="instructor" class="tab-pane fade">
                                  <h3>Instructor Biography</h3>

                                        <div>
                                            <div class="insractor-bio">
                                            <!--<img src="images/temp2.jpg" class="img-responsive">
                                            <h3>Name of instructor</h3>-->
                                            
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <?php echo '<img src="images/temp2.jpg" class="img-responsive">' ?>
                                                </div>
                                                <div class="col-sm-8">
                                                    <?php echo '<h3>'.$instructorName.'</h3><br>'; 
                                                    echo '<p>'.$instructorDesignation.'</p>'; ?>
                                                </div>
                                            </div>    
                                            </div>
                                        </div>


                                     <h3>desription</h3>
                                    <div class="row">
                                     <div class="col-sm-10 col-md-10 col-xs-10">
                                        <!--<p>I am working as Sr. Software Engineer having 10+ years exposure to design and develop software. As I have gain much from open source community and society, I would like to contribute back to society.<br>

        I am Java Certified (SCJP) and Hadoop Certified (Cloudera Certitiation). I am electronics and communication engineer with teaching background.<br>

        I like to teach students during free time and love doing so. It gives me pleasure to teach students.</p>   --> 
                                   <?php echo '<p>'.$instructorDescription.'</p>' ?>
                                   
                                    </div>
                                    <div class="col-sm-2 col-md-2 col-xs-2">
                                    </div>    
                                    <div>
                                       </div> 
                                    </div>    



                        </div>
                        <div id="reviews" class="tab-pane fade">
                          <div class="row">
                              <div class="col-sm-4">
                                  <h2>Average Ratting</h2>
                                  <p style="font-size:120px;margin-bottom:-25px"><?php echo $showAverageRatting; ?></p>
                                  <?php
                    
                                    for($i = 0; $i<$averageRatting; $i++)
                                    {
                                        echo '<i class="glyphicon glyphicon-star-empty"> </i> ';
                                    }

                                ?>
                              </div>
                              <div class="col-sm-8">
                                  <h3>Details</h3>
                                  <p>5 Stars -> <?php echo $Stars5.'%'; ?></p>
                                  <p>4 Stars -> <?php echo $Stars4.'%'; ?></p>
                                  <p>3 Stars -> <?php echo $Stars3.'%'; ?></p>
                                  <p>2 Stars -> <?php echo $Stars2.'%'; ?></p>
                                  <p>1 Stars -> <?php echo $Stars1.'%'; ?></p>
                              </div>
                          </div>
                        </div>
                      </div>
             </div>
             <div class="col-sm-4 col-md-4 col-xs-4">
                 
             </div>
         </div>
    </section>     
      
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
