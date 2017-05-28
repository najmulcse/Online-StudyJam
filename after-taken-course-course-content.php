<?php

    include ('dbConnection.php');

    session_start();

    $courseID = $_SESSION['courseID'];
    $lectureID = $_SESSION['lectureID'];

    //echo $lectureID;

    //echo $courseID."  ".$lectureID;


    // for numberOfLectures of a courseID exists in table
    
    $query = "SELECT lectureID FROM `after_taken_course_course_content_table` WHERE courseIDInCourseContent = $courseID";

    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    //$lectureID = $row['lectureID'];
    //echo $lectureID;

    $num_rows = mysqli_num_rows($result);


    // get lecture videoURL


    $query = "SELECT videoURL FROM `after_taken_course_course_content_table` WHERE lectureID = $lectureID";

    $result = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($result);

    $videoURL = $row['videoURL'];

    // to split the string
    $pieces = explode("\\", $videoURL);


    // to replace space with underscore and %20
    $pieces[0] = preg_replace('/\s+/', '_', $pieces[0]);
    $pieces[1] = preg_replace('/\s+/', '_', $pieces[1]);
    $pieces[2] = preg_replace('/\s+/', '_', $pieces[2]);
    $pieces[3] = preg_replace('/\s+/', '_', $pieces[3]);
    $pieces[4] = preg_replace('/\s+/', '%20', $pieces[4]);

    $videoURL = "";

    for($i = 0; $i<5; $i++)
    {
        if($i != 0 )
        {
            $videoURL.='\\';
            $videoURL.= $pieces[$i];
        }
        else
            $videoURL.= $pieces[$i];

    }


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

    <title>Course Content</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    <link href="css/style.css." rel="stylesheet">
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

	<div class="fluid-container">
	
        <!-- 1st navbar
        ===================== -->
	     <?php
      
    if(!(isset($_SESSION['valid_email']) && $_SESSION['valid_email'] != ''))
    {
     $email ="";
     include("include/navigationwithoutLogin.php"); 
     
    }
     else
          include("include/navigation.php");
      
      ?>
        
        <!-- vedio section
        ===================== -->
        <div class="container-fluid vedio-section">
            <div class="row">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/LO_xGTfCfSs" frameborder="0" allowfullscreen></iframe>-->
                            
                            <?php echo '<video width="560" height="315" controls>
                              <source src="'.$videoURL.'" type="video/mp4">
                            </video>'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    
                       <?php
                            
                            $next = $lectureID + 1;
                             
                            echo '<a style="color:white;text-decoration:none" href="set-lectureID-and-courseID.php?lecture='.$next.'"><button type="button" class="btn btn-primary btn-previous-lecture btn-padding">Continue to next lecture</button></a>';
                    
                            
                            $prev = $lectureID - 1;
                        
                            echo '<a style="color:white;text-decoration:none" href="set-lectureID-and-courseID.php?lecture='.$prev.'"><button type="button" class="btn btn-primary btn-previous-lecture btn-padding">Previous lecture</button></a>';
                        
                        ?>
                        
                        
                    
                    <!--<button type="button" class="btn btn-primary btn-previous-lecture btn-padding">Previous lecture</button>-->
                    
                    <p class="paragraph-padding">Get started ( 5 of 25 items completed  )</p><br>
                    <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            20%
                          </div>
                    </div>

                </div>
            </div>
            
            
            
        </div>
        
        <!-- 2nd navbar
        ===================== -->
        
        
        <nav class="navbar navbar-inverse navbar-static-top">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-padding">
                    <li class="active"><a href="after-taken-course-course-content.php">Course Content <span class="sr-only">(current)</span></a></li>
                    <li><a href="after-taken-course-content-q-and-a.php">Q &amp; A</a></li>
                    <li ><a href="after-taken-course-announcement.php">Announcement</a></li>
                    <li><a href="after-taken-course-quize.php">Quize</a></li>
                    
                    
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Take you into next level <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="after-taken-course-take-your-into-next-level-project.php">Project</a></li>
                        <li><a href="after-taken-course-take-you-into-next-level-real-life-application.php">Real life Application</a></li>
                        <li><a href="after-taken-course-take-you-into-next-level-exam.php">Exam</a></li>
                        
                      </ul>
                    </li>
                    
                    
                  </ul>
                  
                  
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>

        
        <!-- course content
        ===================== -->
        <div class="row">
            <div class="col-sm-6">
                
            </div>
            <div class="col-sm-6">
               
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-3">
                        <div class="input-group input-search-box">
                          
                          <input type="text" class="form-control" placeholder="search content" aria-describedby="search-logo">
                          
                          <span class="input-group-addon" id="search-logo"><i class="glyphicon glyphicon-search"></i></span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
          <?php

                $sectionNo = 1;
                
                $currentLectureID = $lectureID;
        
        //echo $currentLectureID.' '.$lectureID;
        
                $temp = 1;

                for($i=1;$i<=$num_rows;)
                {

                    // get number of lecture of a section
                    $query = "SELECT * FROM `after_taken_course_course_content_table` WHERE sectionID = $sectionNo and courseIDInCourseContent = $courseID ";

                    $result = mysqli_query($con,$query);

                    $sectionContentNumber = mysqli_num_rows($result);
                    
                    if($sectionContentNumber === 0)
                        break;
                    
                    //echo $sectionContentNumber;



                        // get section heading
                        $query = "SELECT sectionHeading FROM `after_taken_course_course_content_table` WHERE sectionID = $sectionNo and courseIDInCourseContent = $courseID";

                        $result = mysqli_query($con,$query);

                        $row = mysqli_fetch_assoc($result);

                        $sectionHeading = $row['sectionHeading'];

                        //echo '<h3>Section '.$sectionNo.': '.$sectionHeading.'</h3><br>';
                    
                        echo '<div class="single-section">
                           <div class="row">
                               <div class="col-sm-8 col-sm-offset-2 course-lecture">
                                   <h5>Section '.$sectionNo.'</h5>
                                    <h4>'.$sectionHeading.'</h4>

                                    <div class="list-group">';
                                    
                    
                    
                    
                            for($j = 1; $j <=$sectionContentNumber; $j++)
                            {

                                // get lecture heading
                                $query = "SELECT lectureHeading FROM `after_taken_course_course_content_table` WHERE lectureID = $temp";

                                $result = mysqli_query($con,$query);

                                $row = mysqli_fetch_assoc($result);

                                $lectureHeading = $row['lectureHeading'];
                                
                                
                                // get lecture videoURL
                                
                                
                                //$query = "SELECT videoURL FROM `after_taken_course_course_content_table` WHERE lectureID = $currentLectureID";

                                //$result = mysqli_query($con,$query);

                                //$row = mysqli_fetch_assoc($result);

                                //$videoURL = $row['videoURL'];

                                // to split the string
                                //$pieces = explode("\\", $videoURL);


                                // to replace space with underscore and %20
                                //$pieces[0] = preg_replace('/\s+/', '_', $pieces[0]);
                                //$pieces[1] = preg_replace('/\s+/', '_', $pieces[1]);
                                //$pieces[2] = preg_replace('/\s+/', '_', $pieces[2]);
                                //$pieces[3] = preg_replace('/\s+/', '_', $pieces[3]);
                                //$pieces[4] = preg_replace('/\s+/', '%20', $pieces[4]);

                                //$videoURL = "";

                                //for($i = 0; $i<5; $i++)
                                //{
                                    //if($i != 0 )
                                    //{
                                        //$videoURL.='\\';
                                        //$videoURL.= $pieces[$i];
                                    //}
                                    //else
                                        //$videoURL.= $pieces[$i];

                                //}
                                
                                //echo $videoURL.'<br>';

                                //echo $currentLectureID.' '.$temp;
                                if($currentLectureID == $temp)
                                {
                                    //echo ' abc ';
                                    //echo '<a href="'.$videoURL.'" class="list-group-item active"><i class="glyphicon glyphicon-play"></i>  
                                        //Lecture '.$j.' '.$lectureHeading.'
                                    //</a>';
                                    
                                    //echo '<a href="#" class="list-group-item active"><i class="glyphicon glyphicon-play"></i>  
                                        //Lecture '.$j.' '.$lectureHeading.'</a>';
                                    
                                    echo '<a href="set-lectureID-and-courseID.php?lecture='.$temp.'" class="list-group-item active "><i class="glyphicon glyphicon-play"></i>  
                                        Lecture '.$j.' '.$lectureHeading.'</a>';
                                }
                                else
                                {
                                    //echo '<a href="'.$videoURL.'" class="list-group-item"><i class="glyphicon glyphicon-play"></i>  
                                        //Lecture '.$j.' '.$lectureHeading.'
                                    //</a>';
                                    
                                    echo '<a href="set-lectureID-and-courseID.php?lecture='.$temp.'" class="list-group-item"><i class="glyphicon glyphicon-play"></i>  
                                        Lecture '.$j.' '.$lectureHeading.'</a>';
                                }
                                

                                $i++;
                                //$currentLectureID++;
                                $temp++;
                            }
                                    
                                      
                                      
                             echo '       </div>
                               </div>
                           </div><br><br><br>
                        </div>';

                    

                    $sectionNo++;

                }

            ?>
          
        
        
        <div class="single-section get-certificate">
            <h3>Have you finished your course ? If you have done ...</h3>
            
            <button type="button" class="btn btn-success">Ask for your certificate</button><br><br><br>
        </div>
        

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
    
    
	<script>
	</script>

</body>

</html>
