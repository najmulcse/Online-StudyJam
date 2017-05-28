<?php session_start(); ?>
<?php include("dbConnection.php") ?>
<?php include("myFunction.php") ?>


<?php 

if(isset($_POST['login']))
{
    //goto myFunction for login 
loginCheck();
 echo "<script> window.open('instructor-request.php','_self')</script>";
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1" >
        <link rel="stylesheet" type="text/css" href="css/grid.css">
      
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,300italic' rel='stylesheet' type='text/css'>
        <link href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="js/scriptjava.js">
       <title> Login | Online StudyJam </title>    
        
        
        <script src="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/js/bootstrap.min.js"> </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    
    <body >
   <?php 
    if(!(isset($_SESSION['valid_email']) && $_SESSION['valid_email'] != ''))
    {
     $email ="";
     include("include/navigationwithoutLogin.php"); 
     
    }
     else
          include("include/navigation.php");
        
   ?>
        
      <div class="bda">
          
        <div class="container con">
             
             <form  action="login.php" method="post" class="form-horizontal frm" role="form">
                 
                 <div class="form-group fmgp">
                     
                     <div class="col-sm-4">
                         
                     </div>
                     
                     <div class="col-sm-5">
                         <h1 class="log-header">Login</h1>
                         <input class="form-control use-input" name="email" type="text" value="" placeholder="Email" required="required">
                     </div>
                     <div class="col-sm-3">
                         
                     </div>
                 </div>
                 <div class="form-group fmgp">
                     <div class="col-sm-4">
                         
                     </div>
                      <div class="col-sm-5">
                         <input class="form-control use-input" name="password"  type="password" value="" placeholder="Password" required="required">
                     </div>
                     <div class="col-sm-3">
                         
                     </div>
                 </div>
                 <div class="form-group fmgp">
                     <div class="col-sm-4">
                         
                     </div>
                      <div class="col-sm-5">
                          <button  type="submit" name="login" class="btn-lg btn-success logbuttonin">    Login    </button>
                     </div>
                     <div class="col-sm-3">
                         
                     </div>
                 </div>
                 <div class="form-group fmgp">
                     <div class="col-sm-4">
                         
                     </div>
                     <div class="col-sm-5 textal">
                       <p class="para">Yet not registered?</p>
                       <a href="signup.php"> <button  class="btn btn-sm signup-button" type="button" > Sign up! </button></a>   
                     </div>
                     <div class="col-sm-3">
                         
                     </div>
                 
                 </div>
            </form>
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
    
    <?php include "..include/login-modal.php"; ?>
    </body>
</html>


