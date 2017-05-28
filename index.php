<?php  session_start();

if(!(isset($_SESSION['valid_email']) && $_SESSION['valid_email'] != ''))
    {
     $email ="";
    
     
    }
else{
    $email=$_GET['id'];
    $_SESSION['valid_email'] = $email;
    $email=$_SESSION['valid_email'];
    }
    
?>
<?php include("dbConnection.php") ?>
<?php include("myFunction.php") ?>
<?php 
    

//echo $email;
//$email_receive = $_GET['email'];
//$title = $_GET['title'];
//$message = $_GET['message'];
//$ID = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online StudyJam</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    
    
    
    
    
    <!-- Header
    ===============-->
    
    
    
    <!-- logo with search box 
    ========================== -->
     <?php
      
    if(!(isset($_SESSION['valid_email']) && $_SESSION['valid_email'] != ''))
    {
     $email ="";
     include("include/navigationwithoutLogin.php"); 
     
    }
     else
          include("include/navigation.php");
      
      ?>
    <!-- end navigation bar-->
    
    <!-- end header-->
    
    
    
    
    <!--home-page-background-image
       =========================== -->
    
    <div id="home-page-background-image">
        <img src="images/cover.png" alt="background-image">
    </div>
    
    
    
    <!--overview of catagory
       =========================== -->
    <div id="catagory-overview">
       <br><br>
       <h2>Our focused area</h2><br>
        <div class="row">
            <div class="col-sm-4 single-catagory-overview">
               <h3>Business</h3>
                <a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Business">
                   
                   <!--<span class="single-catagory-overview-hover-text-1">Browse Courses</span>
                    <span class="single-catagory-overview-hover-text-2">Over 1245 Courses</span>-->
                   
                    <img class="overview-image" src="images/business-catagory-overview-image.jpg" alt="business-catagory-overview-image">
                    
                    
                </a>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatibus tempore numquam doloremque inventore fugiat debitis rem pariatur.</p>
            </div>
            
            <div class="col-sm-4 single-catagory-overview">
                <h3>Development</h3>
                <a href="set-active-class-and-others-on-catagory-page-2.php?catagory=Development">
                    <img class="overview-image" src="images/development-catagory-overview-image-2.jpg" alt="development-catagory-overview-image">
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatibus tempore numquam doloremque inventore fugiat debitis rem pariatur.</p>
            </div>
            
            
            <div class="col-sm-4 single-catagory-overview">
               <h3>IT</h3>
                <a href="set-active-class-and-others-on-catagory-page-2.php?catagory=IT">
                    <img class="overview-image" src="images/it-catagory-overview-image.jpg" alt="IT-catagory-overview-image">
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis voluptatibus tempore numquam doloremque inventore fugiat debitis rem pariatur.</p>
            </div>
        </div>
    </div>
    
    
    <!--website promo vedio section
       =========================== -->
    
    <div id="website-promo-vedio-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5 website-promo-vedio-text-section">
                    <h2>How we will give you service here</h2>
                    <p>Online StudyJam is a platform or marketplace for online learning.Unlike academic programs driven by traditional collegiate coursework,Online StudyJam  provides a   platform for experts of any kind to create courses which can be offered to the public, either at no charge or for a tuition fee.Online StudyJam provides tools which enable users to create a course, promote it and earn money from student tuition charges.</p>
                </div>
                <div class="col-sm-7 website-promo-vedio-video-section">
                   <video width="700" height="415" controls>
                          <!--<source src="courseContent\Development\Web_Development\1\Promo%20Video.mp4" type="video/mp4">-->
                          
                         <source src="video\indexVideo.mp4" type="video/mp4">
                          
                          
                      </video>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--website support(mobile devices)
       =========================== -->
    <div id="website-support">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 website-support-mobile-image-position">
                    <img class="website-support-mobile-image" src="images/mobile-device-1.png" alt="mobile-device">
                    <img class="website-support-mobile-image samsung-mobile-margin" src="images/samsung-phone-image-2.png" alt="mobile-device">
                </div>
                <div class="col-sm-6 website-support-text-area">
                    <h2>Get support on mobile devices.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt enim saepe dolores inventore atque aliquid doloribus cupiditate, praesentium quaerat.</p><br>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul><br><br>
                    
                    <h3>Download apps from here.</h3>
                    <img src="images/iphone-store-image.png" alt="iphone-store-image">
                    <img src="images/google-play-store-image.png" alt="Google-play-store-image">
                    
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!--button for start learning
       =========================== -->
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 home-page-start-learning-button">
                <a href="catagory-page-1.php"><button type="button" class="btn btn-success">Start Learning Now</button></a>
            </div>
            
        </div>
    </div>
    
    
    
    <!--footer
       =========================== -->
    <div id="footer">
        <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Support</a></li>
        </ul>
        <p>© Online StudyJam - 2016</p>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>