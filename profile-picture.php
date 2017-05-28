<?php  session_start();

      
?>
<?php include("dbConnection.php"); ?>
<?php include("myFunction.php") ; ?>

<?php 
//default_profile_info();

      $email = $_SESSION['valid_email'];
     // $filepath = $_SESSION['photo'];
      
      $query_D_profile = "SELECT * FROM student_info WHERE EMAIL='$email'";
      $result_D_profile = mysqli_query($con,$query_D_profile);
      if(!$result_D_profile)
      {   
       
          die('Default profile info query failed!'.mysqli_error());
      }
      while($row = mysqli_fetch_array($result_D_profile))
      { 
        $first_name = $row['F_NAME'];
        $last_name = $row['L_NAME'];
        $email = $row['EMAIL'];
        $gender = $row['GENDER'];
        $language = $row['LANGUAGE'];
        $country =  $row['COUNTRY'];
        $profession = $row['PROFESSION'];
        $website =  $row['WEBSITE'];  
        $filepath = $row['IMAGE'];  
      }
        $space=str_repeat('&nbsp;', 5);



  
    if(isset($_POST['upload']))
          {
            
             image_update();
              

          }
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
        <title>Student Profile</title>
        

  </head>  
  

  <body>
    
     <!-- Header
    ===============-->
    
    
    
    <!-- logo with search box 
    ========================== -->
    <?php include("include/navigation.php"); ?>
    
    <!-- end navigation bar-->
    
    <!-- end header-->
        
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
                
                <div class="col-sm-5 col-md-7 col-xs-5">
                      
                    
                  <div class="username">     
                      <div class="row">
                        
                         <div class="col-sm-4 col-md-4 col-xs-4">
                                 <form method="post" action="profile-picture.php" class="form-horizontal" role="form" enctype="multipart/form-data">
                                      <div class="col-sm-10 col-md-10 col-xs-10">
                                                 <label class=" col-sm-6 col-xs-6" for="last_name">Photo</label>
                                                  <div class="col-sm-5 col-xs-5 col-md-5"> 
                                                  <input type="file" name="image" id="upload" /> <br>

                                                  

                                                 </div>
                                         </div>
                                          <div class="col-sm-7 col-xs-10 col-md-7">
                                          
                                          </div>
                                  
                             <div class="col-sm-2 col-md-2 col-xs-2"> </div>
                              <button  type="submit" name="upload" class="btn-sm btn-success " style="float:right;">   Upload photo </button>
                               
                                </form> 
                         </div> 
                         <div class="col-sm-8 col-md-8 col-xs-8">
                               
                         </div>
                        
                        
                    </div>
                       
                         
                 </div>
                 
                </div>
             
                 
                 <div class="col-sm-4 col-md-3  col-xs-4 placeholder">
                       <img src=" 
                       <?php 
                            $temp="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==";
                          if(strlen($filepath)>0)
                              echo $filepath ; 
                          else
                              echo $temp;
                                 
                                 
                                 
                                 ?>
                     
                     
                     " width="200" height="200" class="img-responsive" alt="Photo">
                      
                       <h3><?php echo $first_name.str_repeat('&nbsp;', 1).$last_name ?></h3> 
          
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
