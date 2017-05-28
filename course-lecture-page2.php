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
                    <iframe width="700" height="415" src="https://www.youtube.com/embed/RG4APMen1w4" frameborder="0" allowfullscreen></iframe>
                 </div>
                 <div class="col-sm-4 col-md-4 col-xs-4 rating-icon premium">
                     <button  type="submit" class="btn btn-success btn-lg"><a href="after-taken-course-course-content.html">Take this course</a> </button><br>
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
                      <li class="active"><a href="course-lecture-page2.html">About course</a></li>
                      <li><a href="course-lecture-page3.html">Curriculum</a></li>
                      <li><a href="course-lecture-page4.html">Instructor</a></li> 
                      <li><a href="#reviews">Reviews</a></li> 
                    </ul>
                  </div>
             </nav>
                 <div class="row">
                                <div class="col-sm-8 col-md-8 col-xs-8">
                                    <h2>About this course</h2>
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-4">
                                
                                 </div>
                            </div>
                          <h3>Course description</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ol>
                                
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                            </ol>
                            <br>
                            <h3>What are the requirements?</h3>
                               <ul>
                                
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                                
                            </ul>
                            <h3>What am I going to get from this course?</h3>
                               <ul>
                                
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                                <li> Learn Web Service Fundamentals and Types of Web Service</li>
                            </ul>
                                <h3>What is the target audience?</h3>
                                 <ul>
                                
                              <li>  This Web Service course is meant for those who wants to Understand all Practical and Fundamental of Restful Web Service. </li>
                            </ul>
             <div class="col-sm-4 col-md-4 col-xs-4">
                 
             </div>
         </div>
    </section>     
      
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
