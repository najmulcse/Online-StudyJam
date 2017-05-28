
<?php session_start();
$email=$_SESSION['valid_email'];
$email_receive = $_GET['email'];
//$title = $_GET['title'];
//$message = $_GET['message'];
$ID = $_GET['id'];
//$date = $_GET['date'];
//$message1=$_SESSION['message'];
//echo $message1;
//$email_receiver=$_SESSION['inbox_email'];
?>
<?php include("dbConnection.php"); ?>
<?php include("myFunction.php") ; ?>
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
        <link rel="stylesheet" href="css/style-dropdown.css" type="text/css" media="screen, projection"/>
        <title>Message | Online StudyJam</title>
        
       
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
                            
                            <div class="col-sm-9 col-md-9">
                             
                             <div class="row">
                             <div class="col-sm-7 col-md-7">
                                       <br><br>
                                     <form action="message-inbox.php" method="post" class="form-horizontal" role="form">
                                        <?php
                                         $query_individual="SELECT * FROM all_message WHERE SN='$ID' AND EMAIL='$email_receive'";
                                         $result_query_message_all = mysqli_query($con,$query_individual); 
                                        if(!$result_query_message_all)
                                        {
                                            die("Message query failed.".mysqli_error($con));
                                        }
                                                  
                                        while($row = mysqli_fetch_assoc($result_query_message_all))
                                        {
                                            $ID=$row['SN'];
                                            $email_receive = $row['EMAIL'];
                                         //   $email_inbox = $row['INBOX'];
                                            $title = $row['TITLE'];
                                            $date = $row['DATE_UP'];
                                            $message = $row['MESSAGE'];
                                        }
                                         ?>
                                         <div class="form-group">
                                             <label class="control-label col-sm-2 col-xs-2 col-md-2" for="to-send">Date</label>
                                             <div class="col-sm-10 ">
                                                 <label for="to-message-send" class="col-sm-6 "><?php 
                                                     
                                                  
                                                     echo $date; ?></label>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label class="control-label col-sm-2 col-xs-2 col-md-2" for="first_name">From</label>
                                             <div class="col-sm-10 ">
                                                 <label for="to-name" class="col-sm-6 "><?php 
                                                     
                                                  
                                                     echo $email_receive; ?></label>
                                             </div>
                                         </div>


                                         <div class="form-group">
                                              <label class="control-label col-sm-2 col-xs-2" for="last_name">Title</label>
                                              <div class="col-sm-10 ">
                                                 <label for="to-name" class="col-sm-6 "><?php echo $title; ?></label>
                                             </div>
                                          </div>


                                          <div class="form-group">
                                            <label class="control-label col-sm-2 col-xs-2"  for="message">Message</label>

                                            <div class="col-sm-10">

                                                 <textarea class="form-control" rows="8" id="message" readonly><?php  echo $message; ?>

                                                 </textarea>
                                             </div>

                                          </div>


                                    
                                      <div class="row">
                                  <div class="col-sm-10"></div>
                                  <div class="col-sm-2 replybutton">
                                      <button  type="submit" name="replay" class="btn btn-lg btn-success logbutton"> <a href="message-new.php?id=2 &title=1 &email=<?php echo $email_receive ;?> &message=2">Reply</a></button>
                                  </div>
                              </div><br> 

                                    </form>


                                  </div>
                             <div class="col-sm-5 col-md-5">
                              <ul class="dropdown">
                                               <li><a href="message-new.php?id=2 &title=1 &email= &message=2">New Message</a>
                                                <li><a href="#">Inbox</a>
                                                    <ul class="sub_menu">
      <?php 
                                       $OPT= findOPT(); 

                                        $query_message="SELECT * FROM all_message WHERE SENT='$email'";
                                        $result_query_message = mysqli_query($con,$query_message); 
                                        if(!$result_query_message)
                                        {
                                            die("Message query failed.".mysqli_error($con));
                                        }
                                            $i=0;            
                                        while($row = mysqli_fetch_assoc($result_query_message))
                                        { 
                                            $ID = $row['SN'];
                                            $email_receive= $row['EMAIL'];
                                           echo " <li><a href='message-inbox.php?id=$ID &email=$email_receive ' > {$email_receive}</a></li>";
                                        }

?>                                                          
                                                         
                                                    </ul>
                                                </li>
                                                <li><a href="#">Sent Message</a>
                                                    <ul class="sub_menu">
                                                        
<?php
                                   
                                       $query_message="SELECT * FROM all_message WHERE OPT='$OPT'";
                                        $result_query_message = mysqli_query($con,$query_message);
                                        if(!$result_query_message)
                                        {
                                            die("Message query failed.".mysqli_error($con));
                                        }
                                            $i=0;
                                   while($row = mysqli_fetch_assoc($result_query_message))
                                        {
                                            $ID = $row['SN'];
                                            $email_sent = $row['SENT'];
                                        
                                            echo " <li><a href='message-send.php?id=$ID &email=$email_sent'> {$email_sent}</a></li>";
                                        }
?>                 
                                                    </ul>
                                                </li>
                                               
                                            </ul>

                              

                              
                            </div>

                             

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
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dropdown.js"></script>
  </body>
</html>
