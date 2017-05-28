<?php session_start(); ?>
<?php include("dbConnection.php") ?>
<?php include("myFunction.php") ?>



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

    <title>Dashboard Template for Bootstrap</title>

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

   <!-- logo with search box 
    ========================== -->
    
    <div id="logo-with-search-box">
        <div class="container-fluid site-logo-with-search-box">
            <div class="row">
                <div class="col-sm-7 ">
                    <img  id="site-logo"  src="images/StudyJamLogo-04.png" alt="logo">
                </div>

                <div class="col-sm-4">
                   
                   <div class="input-group home-page-search-box-and-logo">
                      <input type="text" class="form-control" id="home-page-search-box" placeholder="search" aria-describedby="search-icon">
                      
                      <span class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </span>
                      
                      
                   </div>
                    
                </div>
                
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
    
    
    
    <!--navigation-bar
       ================= -->
       
       <nav class="navbar navbar-default navbar-color navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-position" id="toggle-navbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="catagory-page-1.html">Catagory</a></li>
                <li><a href="community-page-01.html">Community</a></li>
                <li><a href="StudyJam.github.io/index.html">About</a></li>
                
              </ul>
              
              <ul class="nav navbar-nav navbar-right">
                <!--<button type="button" class="btn btn-default">Default</button>-->
                
                <div class="dropdown">
                  <button class="user-profile-dropdown-icon btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                    <span><i class="fa fa-caret-down fa-2x" aria-hidden="true"></i></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">View Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Log Out</a></li>
                    
                  </ul>
                </div>
                
                
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <ul class="nav nav-sidebar">
            <li ><a href="#">profile </a></li>
            <li><a href="#">Edit password</a></li>
            <li><a href="#">Credit card</a></li>
              <li class="active"><a href="#">Personal skill<span class="sr-only">(current)</span></a></li>
              <li><a href="">Taken courses</a></li>
            <li><a href="">Folllowing</a></li>
            <li><a href="">Rating</a></li>
            <li><a href="">Message</a></li>
          
          
          </div>
          
          
        
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main page-header">
            <div class="bg"> <button type="button" class="btn btn-primary">Add  skill</button>
                <button type="button" class="btn btn-primary">Edit skill</button></div>
            
          <h1>Education</h1>
            <o1 type="circle">
                <li> SSC</li>
                <li>HSC</li>
                <li>Computer science,Rajshahi University</li>
                <li>PHD,london</li>
            
            </o1>

             <h1>Others</h1>
            <o1 type="circle">
                <li>none</li>
                <li>none</li>
                <li>none</li>
                <li>none</li>
            
            </o1>
        </div>
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
  </body>
</html>
