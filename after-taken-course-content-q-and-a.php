<?php
    
    include("dbConnection.php");

    session_start();

    $courseID = $_SESSION['courseID'];
    $lectureID = $_SESSION['lectureID'];


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
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/info.css" rel="stylesheet">
    <link href="css/widgContent.css" rel="stylesheet">
    <link href="css/widgEditor.css" rel="stylesheet">
    <link href="css/style.css." rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="js/widgEditor.js"></script>

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
                    <!--<button type="button" class="btn btn-primary btn-padding">Continue to next lecture</button>
                    
                    <button type="button" class="btn btn-primary btn-previous-lecture btn-padding">Previous lecture</button>-->
                    
                    <?php
                            
                            $next = $lectureID + 1;
                             
                            echo '<a style="color:white;text-decoration:none" href="set-lectureID-and-courseID.php?lecture='.$next.'"><button type="button" class="btn btn-primary btn-previous-lecture btn-padding">Continue to next lecture</button></a>';
                    
                            
                            $prev = $lectureID - 1;
                    
                            if($prev == 0)
                                $prev = 1;
                        
                            echo '<a style="color:white;text-decoration:none" href="set-lectureID-and-courseID.php?lecture='.$prev.'"><button type="button" class="btn btn-primary btn-previous-lecture btn-padding">Previous lecture</button></a>';
                        
                    ?>
                    
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
                    <li ><a href="after-taken-course-course-content.php">Course Content <span class="sr-only">(current)</span></a></li>
                    <li class="active"><a href="after-taken-course-content-q-and-a.php">Q &amp; A</a></li>
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

        
        <!-- Q&A
        ===================== -->
        <form action="" id="form-ask-question">
             <div class="row">
                 <div class="col-sm-2">
                     
                 </div>
                 
                 <div class="col-sm-8">
                     <div class="form-group">
                        <label for="course-question">Question</label>

                        <div class="input-group">

                            <input type="text" class="form-control" id="course-question" placeholder="Ask your question" aria-describedby="ask-question">

                            <span class="input-group-addon" id="ask-question"><button type="button" class="btn btn-info">Publish</button></span>
                        </div>
                      </div>
                 </div>
                 
                 <div class="col-sm-2">
                     
                 </div>
             </div>
              
        </form><br><br>
        
        <div class="question-section">
            <div class="row">
               
               
               
               
               <?php
                
                    // for questionID

                    $query = "SELECT questionID FROM after_taken_course_qanda_table WHERE courseIDInQandA = $courseID and lectureIDInQandA = $lectureID";

                    $result = mysqli_query($con,$query);
                
                    $row = mysqli_fetch_assoc($result);
                
                    $questionContentNumber = mysqli_num_rows($result);
                
                    $questionID = $row['questionID'];
                
                
                    for($i = 1; $i <= $questionContentNumber; $i++)
                    {
                        // for question description
                        $query = "SELECT questionFullDescription FROM after_taken_course_qanda_table WHERE questionID = $questionID";

                        $result = mysqli_query($con,$query);

                        $row = mysqli_fetch_assoc($result);

                        $questionFullDescription = $row['questionFullDescription'];
                        
                        
                        // for user name
                        $query = "select student_info.F_NAME, student_info.L_NAME from student_info,after_taken_course_qanda_table where student_info.EMAIL = after_taken_course_qanda_table.emailINQandA AND after_taken_course_qanda_table.questionID =  $questionID";

                        $result = mysqli_query($con,$query);

                        $row = mysqli_fetch_assoc($result);

                        $firstName = $row['F_NAME'];
                        
                        $lastName = $row['L_NAME']; 
                        
                        //echo $firstName." ".$lastName." ".$questionID."<br>";
                        
                        
                        // for userPhoto
                        $query = "select student_info.IMAGE from student_info,after_taken_course_qanda_table where student_info.EMAIL = after_taken_course_qanda_table.emailINQandA AND after_taken_course_qanda_table.questionID =  $questionID";
                        
                        /* this need to be done next time because in 
                           studentInfo table there is no image  */
                        
                        
                        
                        
                        echo '
                        <div class="col-sm-1">
                    
                        </div>

                        <div class="col-sm-2">
                            <img class="user-picture-shape" src="images/images.jpg" alt="user-picture">
                        </div>
                        <div class="col-sm-9">
                            <div class="user-reply">';
                        
                        echo '
                        <h3>'.$firstName.' '.$lastName.'</h3>
                        <p>'.$questionFullDescription.'</p>';
                        
                        
                        
                        
                        
                        // for detecting number of reply

                        $query = "SELECT replyID FROM `after_taken_course_qanda_reply_table` WHERE questionIDInReply =  $questionID";

                        $result = mysqli_query($con,$query);

                        $row = mysqli_fetch_assoc($result);
                        
                        $replyContentNumber = mysqli_num_rows($result);
                        
                        $replyID = $row['replyID'];
                        
                        
                        for($j = 1; $j <= $replyContentNumber; $j++)
                        {
                            // for reply description
                            $query = "SELECT description FROM `after_taken_course_qanda_reply_table` WHERE replyID =  $replyID";

                            $result = mysqli_query($con,$query);

                            $row = mysqli_fetch_assoc($result);
                            
                            $description = $row['description'];
                            
                            
                            // for reply userName
                            $query = "select student_info.F_NAME, student_info.L_NAME from student_info,after_taken_course_qanda_reply_table where student_info.EMAIL = after_taken_course_qanda_reply_table.emailINQandAReply AND after_taken_course_qanda_reply_table.replyID =  $replyID";

                            $result = mysqli_query($con,$query);

                            $row = mysqli_fetch_assoc($result);
                            
                            $firstName = $row['F_NAME'];
                            
                            $lastName = $row['L_NAME'];
                            
                            
                            echo '
                            <div class="rows">
                                <div class="col-sm-2">
                                    <br><br>
                                    <h4>'.$firstName.' '.$lastName.'</h4>
                                </div>
                                <div class="col-sm-10">
                                    <p>'.$description.'</p>

                                </div>
                            </div>';
                            
                            
                            $replyID++;
                        }
                        
                       
                        echo '
                        <div class="rows">
                            <div class="col-sm-9">
                               <div class="text-editor">
                                
                                    <form action="submit.php" onsubmit="alert("Your submitted HTML was:\n\n" + document.getElementById("noise").value); return false;">
                                      <fieldset>
                                        <label for="noise">
                                             Compose your reply
                                        </label>
                                        <textarea id="noise" name="noise" class="widgEditor nothing"></textarea>
                                      </fieldset>
                                      <fieldset class="submit">
                                        <input type="submit" value="Publish" onclick="hideReplyBox()" />
                                      </fieldset>
                                    </form>
                                
                               </div>
                            </div>
                            <div class="col-sm-3">
                               <button type="button" class="btn btn-primary give-a-reply" onclick="removeGiveReplyText()">Give a reply..</button>
                                
                                
                            </div>
                        </div>
                        </div>
                    </div>
                </div><br><br><hr><br>';
                        
                        $questionID++;
                    }

                ?>
               
        </div>
        
        
        
        
        
        
        <!-- give-reply-function
      ======================-->
      <script>
          function removeGiveReplyText(){
              //alert(divSelect);
              //var calas = divSelect;
              
              $(".give-a-reply").css("display","none"); 
              $(".text-editor").css("display","block");
              //$("divSelect textarea").css("display","none");
              
              //$("."+calas).css("display","block");
          }
          
          function hideReplyBox(divSelect){
              
              //var calas = divSelect;
              
              $(".text-editor").css("display","none");
              $(".give-a-reply").css("display","block"); 
          }
            
         
      </script>   
        
        
        
        
        

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
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
