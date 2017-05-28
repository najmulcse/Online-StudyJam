<?php  session_start();

      
?>
<?php include("dbConnection.php"); ?>
<?php include("myFunction.php") ; ?>

<?php 
//default_profile_info();

      $email = $_SESSION['valid_email'];
       $select= $_SESSION['select'];
          // echo $select;
      
     // $filepath = $_SESSION['photo'];
      
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
                              
                               <h2>Course Contents</h2>
                               <br> <br>
                                <div class="col-sm-11 col-md-11 col-xs-11">
                                       <div class="row">
                                           <form method="post" action=""> 
                                                  <div class="col-sm-11 col-md-11 col-xs-11">
                                                           <div class="col-sm-1 col-md-1 col-xs-1">

                                                              </div>
                                                           <label class="col-sm-2 col-xs-2 col-md-2" for="course_">Chapter Name</label>
                                                            <div class="col-sm-7 col-xs-7 col-md-7">  
                                                             <input placeholder="Chapter name of the lecture" class="form-control use-input" name="chapter" type="text" value=""  ><br>
                                                            </div>
                                                     </div>
                                                     <div class="col-sm-1 col-md-1 col-xs-1">

                                                      </div>
                                                      <br>
                                                      
                                                      
                                                      
                                                     <div class="col-sm-11 col-md-11 col-xs-11">
                                                               <div class="col-sm-1 col-md-1 col-xs-1">

                                                                  </div>
                                                               <label class="col-sm-2 col-xs-2 col-md-2" for="course_">Lecture Title</label>
                                                                <div class="col-sm-7 col-xs-7 col-md-7">  
                                                                 <input placeholder="Write the title of the lecture" class="form-control use-input" name="lecture_title" type="text" value=""  ><br>
                                                                </div>
                                                                 </div>
                                                     <div class="col-sm-1 col-md-1 col-xs-1"></div>   <br>
                                                     
                                                     
                                                     
                                                    
                                                      
                                                      <div class="col-sm-11 col-md-11 col-xs-11">
                                                               <div class="col-sm-1 col-md-1 col-xs-1">

                                                                  </div>
                                                               <label class="col-sm-2 col-xs-2 col-md-2" for="course_">Lecture Description</label>
                                                                <div class="col-sm-7 col-xs-7 col-md-7">  
                                                                 <textarea class="form-control student-message-textarea-sizing" rows="8" cols="50" id="message" name="message">

                                                             </textarea> <br>
                                                                </div>
                                                                 </div>
                                                     <div class="col-sm-1 col-md-1 col-xs-1"> </div> <br>
                                                     
                                                     
                                                      <div class="col-sm-11 col-md-11 col-xs-11">
                                                               <div class="col-sm-1 col-md-1 col-xs-1">

                                                                  </div>
                                                               <label class="col-sm-2 col-xs-2 col-md-2" for="course_">Lecture Video</label>
                                                                <div class="col-sm-7 col-xs-7 col-md-7">  
                                                                 <input type="file" name="image" id="upload" /> <br>
                                                                </div>
                                                                 </div>
                                                     <div class="col-sm-1 col-md-1 col-xs-1"></div>   <br>
                                                     
                                                     
                                                     
                                                     <div class="col-sm-11 col-md-11 col-xs-11">
                                                               <div class="col-sm-1 col-md-1 col-xs-1">

                                                                  </div>
                                                               <label class="col-sm-2 col-xs-2 col-md-2" for="course_">Quize question</label>
                                                                <div class="col-sm-7 col-xs-7 col-md-7">  
                                                                <input placeholder="Quize question" class="form-control use-input" name="lecture_title" type="text" value=""  ><br>
                                                                 <input placeholder="Option 1" class="form-control use-input" name="lecture_title" type="text" value=""  ><br>
                                                                  <input placeholder="Option 2" class="form-control use-input" name="lecture_title" type="text" value=""  ><br>
                                                                     <input placeholder="Option 3" class="form-control use-input" name="lecture_title" type="text" value=""  ><br>
                                                                      <input placeholder="Option 4" class="form-control use-input" name="lecture_title" type="text" value=""  ><br>
                                                                </div>
                                                                 </div>
                                                     <div class="col-sm-1 col-md-1 col-xs-1"> </div> <br>
                                                     
                                                     <div class="col-sm-11 col-md-11 col-xs-11">
                                                               <div class="col-sm-1 col-md-1 col-xs-1">

                                                                  </div>
                                                               <label class="col-sm-2 col-xs-2 col-md-2" for="course_">Quize Answer</label>
                                                                <div class="col-sm-7 col-xs-7 col-md-7">  
                                                                 <input placeholder="1 / 2 / 3 / 4" class="form-control use-input" name="lecture_title" type="text" value=""  ><br>
                                                                </div>
                                                                 </div>
                                                                 
                                                   
                                           
                                                     <div class="col-sm-1 col-md-1 col-xs-1"></div> 
                                                     
                                               <div class="col-sm-11 col-md-11 col-xs-11"> </div>
                                                              <div class="col-sm-8 col-md-8 col-xs-8">

                                                                  </div>
                                                                  <div class="col-sm-2 col-xs-2 col-md-2">  
                                                               <button style="float:right;" type="submit" name="request" class="btn-sm btn-success ">Request </button>
                                                           </div> 
                                                   
                                           
                                                     <div class="col-sm-1 col-md-1 col-xs-1"></div>  
                                                    
                                                   
                                                     
                                           </form>            
                                        
                                      </div>
                              </div>
                                     
                                      
                                </div>
                                
               
                                 
                                   <div class="col-sm-1 col-md-1 col-xs-1">
                                   </div>
                                   
                                 <br> <br> <br>   
                            
                      <div class="row">
                       
                          <div class="col-sm-6 col-md-6 col-xs-6"> </div>
                     
                     <div class="col-sm-5 col-xs-5 col-md-5"> 
                     <h4> if all lectures are added , then click now the <b>next</b> button to complete the next step .</h4> 
                      <button style="float:right;" type="submit" name="request" class="btn-lg btn-success ">Next </button></div> <br>
                      <div class="col-sm-1 col-md-1 col-xs-1"> </div>
                     
                      </div> 
                        
                    </div>
                </div>
                <div>
               
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
