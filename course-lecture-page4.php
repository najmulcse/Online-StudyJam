<?php

    include("dbConnection.php");
    session_start();

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
           <h2>Headline of the course</h2>
           
               <i class="glyphicon glyphicon-star-empty"> </i>
               <i class="glyphicon glyphicon-star-empty"> </i>
               <i class="glyphicon glyphicon-star-empty"> </i>
               <i class="glyphicon glyphicon-star-empty"> </i>
               <i class="glyphicon glyphicon-star-empty"> </i>
           <p>1299 rating, 2120 students enrolled.</p>
           
      </div>
    </div>
               
 </section>
        
     <section>
         <div class="row">
                  <div class="col-sm-1 col-md-1 col-xs-1">
                  </div>
                  <div class="col-sm-7 col-md-7 col-xs-7">
                      <iframe width="700" height="415" src="https://www.youtube.com/embed/qKoajPPWpmo?list=PLr6-GrHUlVf8JIgLcu3sHigvQjTw_aC9C" frameborder="0" allowfullscreen></iframe>
                 </div>
                 <div class="col-sm-4 col-md-4 col-xs-4 rating-icon premium">
                     <button onclick="#" type="submit" class="btn btn-success btn-lg">Take this course </button><br>
                     <p>$230</p>
                     <p class="off"> (30% off)</p>  <br>   
                     <h3>Start free preview</h3>   
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
                                <p>88</p>
                         </div>
                         
                        
                         <div class="col-sm-4 col-md-4 col-xs-4">
                                <p>Video      </p>  
                         </div> 
                         <div class="col-sm-8 col-md-8 col-xs-8">
                                <p>4 hours</p>
                         </div>
                        <div class="col-sm-4 col-md-4 col-xs-4">
                                <p>Skill level      </p>  
                         </div> 
                         <div class="col-sm-8 col-md-8 col-xs-8">
                                <p>All level</p>
                         </div>
                         
                        
                         <div class="col-sm-4 col-md-4 col-xs-4">
                                <p>Language      </p>  
                         </div> 
                         <div class="col-sm-8 col-md-8 col-xs-8">
                                <p>English</p>
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
    </section>        
    
    <section>
         <div class="row">
             <div class="col-sm-1 col-md-1 col-xs-1"></div>
             <div class="col-sm-11 col-md-11 col-xs-11">
             <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <ul class="nav navbar-nav">
                      <li ><a href="course-lecture-page2.html">About course</a></li>
                      <li><a href="course-lecture-page3.html">Curriculum</a></li>
                      <li class="active"><a href="course-lecture-page4.html">Instructor</a></li> 
                      <li><a href="#reviews">Reviews</a></li> 
                    </ul>
                  </div>
             </nav>
                 <h3>Instructor Biography</h3>

                                        <div>
                                            <div class="insractor-bio">
                                            <img src="images/temp2.jpg" class="img-responsive">
                                            <h3>Name of instructor</h3>    
                                            </div>
                                        </div>


                                     <h3>desription</h3>
                                    <div class="row">
                                     <div class="col-sm-10 col-md-10 col-xs-10">
                                        <p>I am working as Sr. Software Engineer having 10+ years exposure to design and develop software. As I have gain much from open source community and society, I would like to contribute back to society.<br>

        I am Java Certified (SCJP) and Hadoop Certified (Cloudera Certitiation). I am electronics and communication engineer with teaching background.<br>

        I like to teach students during free time and love doing so. It gives me pleasure to teach students.</p>    
                                    </div>
                                    <div class="col-sm-2 col-md-2 col-xs-2">
                                    </div>    
                                    <div>
                                       </div> 
                                    </div>
         </div>
    </section>     
      
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
