<?php  session_start();

      
?>
<?php include("dbConnection.php"); ?>
<?php include("myFunction.php") ; ?>

<?php 
//default_profile_info();

      
     // $filepath = $_SESSION['photo'];
     

     if(isset($_POST['next']))
     {
          echo $select;
          echo "<script> window.open('instructorAdd-course.php','_self') </script>";
     }

                                    if(isset($_POST['submit']))
                                         {
                                      $select = $_POST['catagory_choose']  ;
                                   echo $select;
                                        $_SESSION['select']=$select;
                                       
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
                        <li><a href="#">Credit Card</a></li>
                        <li><a href="studentPersonalSkill.php">Personal skill</a></li>
                        <li> <a href="studentTakenCourses.php">Taken Courses</a></li> 
                        <li><a href="studentFollowing.php">Following</a></li>
                        <li><a href="studentRatting.php">Rating</a></li>
                        <li><a href="message-default.php">Message</a></li>
                      </ul>
                </div>
                
                <div class="col-sm-9 col-md-10 col-xs-9">
                          <div class="row">
                              
                               <h2>Welcome to StudyJam as an instructor</h2>
                               <br> <br>
                                <div class="col-sm-8 col-md-8 col-xs-8">
                                       <div class="row">
                                            <div class="col-sm-8 col-md-8 col-xs-8">
                                                   <label class="col-sm-5 col-xs-5 col-md-5" for="course_">Course Name</label>
                                                    <div class="col-sm-7 col-xs-7 col-md-7">  
                                                     <input class="form-control use-input" name="course_name" type="text" value=""  ><br>
                                                    </div>
                                                     </div>
                                                     <div class="col-sm-4 col-md-4 col-xs-4">

                                                      </div>
                                                      <br>
                                         <div class="col-sm-8 col-md-8 col-xs-8">
                                                 <label class=" col-sm-5 col-xs-5" for="last_name">Promo video</label>
                                                  <div class="col-sm-3 col-xs-3 col-md-3"> 
                                                  <input type="file" name="image" id="upload" /> <br>



                                                 </div>
                                         </div>
                                         <div class="col-sm-4 col-md-4 col-xs-4">
                                             
                                          </div>
                                          <br>
                                          <div class="col-sm-8 col-md-8 col-xs-8">
                                                   <label class="col-sm-5 col-xs-5 col-md-5" for="first_name">Number of Lectures</label>
                                                     
                                                    <div class="col-sm-3 col-xs-3 col-md-3">
                                                     <input class="form-control use-input" name="website" type="text" value=""  ><br>
                                                    </div>
                                                     </div>
                                                     <div class="col-sm-4 col-md-4 col-xs-4">

                                                      </div>
                                      </div>
                                     
                                      
                                </div>
                                
                               
                                 <div class="col-sm-3 col-md-3 col-xs-3">

                                <form method="post" action="#">
                                    <div class="form-group">
                                      <label for="sel1">Select Catagory</label>
                                      <select class="form-control data-live-search="true "" id="sel1" name="catagory_choose">
                                        <option value="Development" >Development</option>
                                        <option value="IT">IT</option>
                                        <option value="Web">Web</option>
                                        <option value="Business">Business</option>
                                        <option value="Design">Design</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Health">Health</option>
                                        <option value="Music">Music</option>
                                        <option value="Language">Language</option>
                                        <option value="Life Style">Life Style</option>
                                        
                                      </select>
                                    </div>
                                    
<!--
                                    
-->
                                  </form>

                                   </div>
                                   <div class="col-sm-1 col-md-1 col-xs-1">
                                   </div>
                   
                </div>
       </div>
                           <form method="post" action="">
                            <button style="float:right; margin-right:20px;" type="submit" name="next" class="btn-lg btn-success">Next</button>
                            </form>
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
