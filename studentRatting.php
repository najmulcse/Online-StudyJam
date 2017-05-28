<?php session_start(); ?>
<?php include("dbConnection.php") ?>
<?php include("myFunction.php") ?>



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
        <title>Rating | Online StudyJam</title>
        

  </head>

  <body>
    <div id="profile-default">
   <!-- logo with search box 
    ========================== -->
   <?php include("include/navigation.php"); ?>
        
        
        
        
          <section>
            <div class="container-fluid">
                 
                     <div class="row">
                            <div class="col-sm-3 col-md-2 col-xs-3 sidebar">
                                  <ul class="nav nav-sidebar">
                                    <li class="active"><a href="studentProfile-default.php">Profile<span class="sr-only">(current)</span></a></li>
                                    <li><a href="studentEditPassword.php">Edit Password</a></li>
                                    <li><a href="profile-picture.php">Profile Picture </a></li>
                                    <li><a href="#">Credit Card</a></li>
                                    <li><a href="studentPersonalSkill.php">Personal skill</a></li>
                                    <li> <a href="studentTakenCourses.php">Taken Courses</a></li> 
                                    <li><a href="studentFollowing.php">Following</a></li>
                                    <li><a href="studentRatting.php">Rating</a></li>
                                    <li><a href="message-default.php">Message</a></li>
                                  </ul>
                            </div>

                            <div class="col-sm-9 col-md-10">
                             
                                <div id="Be-Expert-On-PHP" style="height: 300px; width: 100%;"></div><br><br>
                                
                                <hr>
                                
                                <div id="Learn-Basic-C" style="height: 300px; width: 100%;"></div><br><br>

                            </div>
              
                    </div>
              </div>
         </section>
        
         <section>
            <div class="all-footer">
             <footer class="">
                         <div class="button-footer">

                         <a href="#">Linked in</a>
                          <a href="#">Google+</a>
                          <a href="#">Facebook</a>
                          <a href="#">Twitter</a>    

                        </div>

                   </footer>
            </div>

         </section>     
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/canvasjs.min.js"></script>
    <script src="js/student-ratting.js"></script>
    
  </body>
</html>
