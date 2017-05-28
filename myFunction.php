
<?php  include("dbConnection.php"); ?>
<?php 
//function for signup
function signUPchecking()
{
    global $con;
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];  
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    $first_name =  mysqli_real_escape_string($con,$first_name);
    $last_name =  mysqli_real_escape_string($con,$last_name);
    $email =  mysqli_real_escape_string($con,$email);
    $password =  mysqli_real_escape_string($con,$password);
    $confirm_password =  mysqli_real_escape_string($con,$confirm_password);
    //function call for database checking..    
       
        $query_for_check_email = "SELECT EMAIL FROM student_info where EMAIL='$email'";
        $result_query_email = mysqli_query($con,$query_for_check_email);
        $check_user = mysqli_num_rows($result_query_email);
        if($check_user)
         {      
               // check_Validation();
                echo "<script> alert('This eamil account is existed .Try for another Email !') </script>";
        }
        else if($con) 
        {       
               
                if($password == $confirm_password)
                {
                    //$password = Encrypt('mypass123',$password);
                  
                    $hashFormat= "$2y$10$";
                    $salt = "iusesomecrazystrings22";
                    $hashF_and_salt=$hashFormat.$salt;
                    $password= crypt($password,$hashF_and_salt);
 
                    $query= "INSERT INTO student_info(F_NAME,L_NAME,EMAIL,PASSWORD)";
                    $query.= "VALUES ('$first_name', '$last_name', '$email', '$password')";
                    $result_query_insert_data = mysqli_query($con,$query);
                    
                        if(!$result_query_insert_data)
                        {
                             echo "<script> alert('Insert query failed!') </script>".mysql_error();

                        }
                        else
                        {
                            $_SESSION['valid_email'] = $email;
                            echo "<script> window.open('studentProfile-default.php','_self') </script>";
                        }
                         
                        
                }
                else
                {
                     echo "<script> alert('Password mismatch!!') </script>";
                }
        }
        else
        {
            echo "<script> alert('Database connection failed!') </script>"; 
        }

}



//function for login

function loginCheck()
{   
         global $con;
         global $email;
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email = mysqli_real_escape_string($con,$email);
        $password = mysqli_real_escape_string($con,$password); 
        //$password= password_hash($password,PASSWORD_DEFAULT);
        //function call for database checking..    
        
        $query_for_check_email = "SELECT PASSWORD FROM student_info where EMAIL='$email' ";
      
    
    
        $result_query_email = mysqli_query($con,$query_for_check_email);
        $row = mysqli_fetch_assoc($result_query_email);
        $password_db = $row['PASSWORD'];
    
                    $hashFormat= "$2y$10$";
                    $salt = "iusesomecrazystrings22";
                    $hashF_and_salt=$hashFormat.$salt;
                    $password_user= crypt($password,$hashF_and_salt);
       
    
        if($password_user!=$password_db)
         {   
             
             echo " <script>alert('Username or Password is not correct,try again later!') </script> " ;
           //  echo "<script> window.open('login.php','_self') </script>";
              
        }
        else
        {
            // goto studentProfile-default class 
              $_SESSION['valid_email'] = $email;
               
               echo "<script> window.open('studentProfile-default.php','_self') </script>";
        }

    return $email;
}



//funcion for image update

function image_update()
                      {     
                          global $con;
                          $types = array('image/jpeg', 'image/gif', 'image/png','image/PNG');
                          $email = $_SESSION['valid_email'];
                          $filetmp = $_FILES["image"]["tmp_name"];
                          $filename = $_FILES["image"]["name"];
    
                        if(in_array($_FILES["image"]["type"],$types))
                        {
                          $filetype = $_FILES["image"]["type"];
                          $filepath = "photos/".$filename;
                          
                          $filepath = mysqli_real_escape_string($con,$filepath);
                          move_uploaded_file($filetmp,$filepath);
                          $query_for_update_image = "UPDATE student_info SET ";
                          $query_for_update_image.= "IMAGE = '$filepath' ";
                          $query_for_update_image.= "WHERE EMAIL= '$email' ";
                          $result_profile_update_image = mysqli_query($con,$query_for_update_image);
                          $_SESSION['photo']=$filepath;
                          
                            if(!$result_profile_update_image)
                            {
                                die(" Image update query failed");
                            }
                    echo " <script>alert('Profile picture successfully updated ') </script>";
                     echo "<script> window.open('studentProfile-default.php','_self') </script>";
                       }
                   
                     
                    else{
                         echo " <script>alert('Format is  not correct,try again later!') </script> " ;
                         }
                    }
                      


//function for default profile info

    
  function profile_update()
  {                   
                    global $con;
                    global $email;
                    global $gender;
                      if(isset($_POST['gender']))
                      {
                          $gender=$_POST['gender'];
                      }
                 //profile_update();

                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];  
                //$email = $_POST['email'];
                $country = $_POST['country'];
                $profession = $_POST['profession'];
                $website = $_POST['website'];  
                //$gender = $_POST['gender'];
                $language = $_POST['language'];
                $first_name =  mysqli_real_escape_string($con,$first_name);
                $last_name =  mysqli_real_escape_string($con,$last_name);
                //$email =  mysqli_real_escape_string($con,$email);
                $country =  mysqli_real_escape_string($con,$country);
                $profession =  mysqli_real_escape_string($con,$profession);
                $website = mysqli_real_escape_string($con,$website);  
                $language =  mysqli_real_escape_string($con,$language);
                $gender = mysqli_real_escape_string($con,$gender);  

                $query_for_update = "UPDATE student_info SET ";
                $query_for_update.= "F_NAME = '$first_name', ";
                $query_for_update.= "L_NAME = '$last_name', ";
                $query_for_update.= "LANGUAGE = '$language', ";
                $query_for_update.= "GENDER = '$gender', ";
                $query_for_update.= "COUNTRY = '$country', ";
                $query_for_update.= "WEBSITE = '$website', ";
                $query_for_update.= "EMAIL = '$email', ";
                $query_for_update.= "PROFESSION = '$profession' ";
                $query_for_update.= "WHERE EMAIL= '$email' ";

                $result_profile_update = mysqli_query($con,$query_for_update);

                        if(!$result_profile_update)
                        {
                            die("Update query failed".mysqli_error());
                        }
                        else{
                               echo " <script>alert('Profile successfully updated ') </script>";
                              echo "<script> window.open('studentProfile-default.php','_self') </script>";
                        }


      
      
    
      
  }


//function for change password


function changePassword()
{
     global $con;
     global $email;
     $current_password = $_POST['current_password'];
     $new_password = $_POST['new_password'];
     $confirm_password = $_POST['confirm_password'];
     $current_password = mysqli_real_escape_string($con,$current_password);
     $new_password = mysqli_real_escape_string($con,$new_password);
     $confirm_password = mysqli_real_escape_string($con,$confirm_password);
    
     $query_password = "SELECT * FROM student_info WHERE EMAIL='$email'";
     $result_query_password = mysqli_query($con,$query_password);
      
    while($row = mysqli_fetch_array($result_query_password))
      { 
        $dbpassword = $row['PASSWORD'];
        
      }
    
    if(!$result_query_password)
    {
        die("Query password failed");
    }
    
                    $hashFormat= "$2y$10$";
                    $salt = "iusesomecrazystrings22";
                    $hashF_and_salt=$hashFormat.$salt;
                    $current_password = crypt($current_password,$hashF_and_salt);
    
    if($current_password==$dbpassword) 
    { 
        if($new_password==$confirm_password)
        {
            $new_password= crypt($new_password,$hashF_and_salt);
            $query_update_password = "UPDATE student_info SET PASSWORD='$new_password' WHERE EMAIL='$email'" ;
            $result_query_update_password = mysqli_query($con,$query_update_password);
            
            if(!$result_query_update_password)
            {
                die("update password query failed");
            }
            else
            {
                echo "<script> alert('Password successfully changed.') </script>";
                echo "<script> window.open('studentProfile-default.php','_self')</script>";
            }
        }
        else{
            echo "<script> alert('New password and confirmed password is not matched')</script>";
        }
        
    }
    else{
        echo "<script> alert('Your old password is not correct! ')</script>";
    }
}

/* function for message*/

    function message()
    {
         global $con;
         global $email;
        
    $title = $_POST['title'];
    $message = $_POST['message'];  
    $email_receiver = $_POST['email'];
    
  
    $title =  mysqli_real_escape_string($con,$title);
    $message =  mysqli_real_escape_string($con,$message);
    $email_receiver = mysqli_real_escape_string($con,$email_receiver);
         
        if($email==$email_receiver)
        {
            echo "<script> alert('Select a correct receipent.' )</script>";
        }
        else{
       
        $query_for_check_email = "SELECT EMAIL FROM student_info where EMAIL='$email_receiver'";
        $result_query_email = mysqli_query($con,$query_for_check_email);
        $check_user = mysqli_num_rows($result_query_email);
        if(!$check_user)
         {      
               // check_Validation();
                echo "<script> alert('This eamil account does not exists .Try for another Email !') </script>";
        }
        else
        {       
               
                $OPTcheck="SELECT OPT FROM all_message where EMAIL='$email'";
                $resultOPT = mysqli_query($con,$OPTcheck);
                $OPTFind = mysqli_num_rows($resultOPT);
                    if(!$OPTFind)
                    {
                        $OPT = rand(1,5000);
                    }
                    else
                    {
                        
                      while($row = mysqli_fetch_array($resultOPT))
                          { 
                            $OPT = $row['OPT'];
                          

                          }
                    }
                   
               
                    $query= "INSERT INTO all_message(EMAIL,TITLE,MESSAGE,SENT,OPT) ";
                    $query.= "VALUES ('$email', '$title', '$message', '$email_receiver', '$OPT')";
                    $result_query_insert_data = mysqli_query($con,$query);
                    
                        if(!$result_query_insert_data)
                        {
                             echo "<script> alert('Insert query failed!') </script>".mysql_error();

                        }
                        else
                        {
                            $_SESSION['valid_email'] = $email;
                            $_SESSION['inbox_email'] = $email_receiver;
                            $_SESSION['OPT']= $OPT;
                             echo "<script> alert('Message successfully sent') </script>";
                          //  echo "<script> window.open('message-new.php?id=2 &title=1 &email=. &message=2','_self')</script>";
                           
                            
                        }
                         
                        
        }
            
            }

    }


     function findOPT()
       {
             global $con;
             global $email;
         
               $OPTcheck="SELECT OPT FROM all_message where EMAIL='$email'";
                $resultOPT = mysqli_query($con,$OPTcheck);
                $OPTFind = mysqli_num_rows($resultOPT);
         
                if(!$OPTFind)
                        {
                      //  echo "<script> alert('OPT query failed') </script>";
                        return 0;
                        }
              else    
               {
                      while($row = mysqli_fetch_array($resultOPT))
                          { 
                            $OPT = $row['OPT'];
                          }
                
                }
         //echo $OPT;
         return $OPT;
       }



      function searchArrayKeyVal($sKey,$id, $myarray)
         {
            foreach ($myarray as $key => $val) {
                   if ($val[$sKey] == $id) {
                       //echo $key;
                       return $key;

                   }
               }
               return false;
        }
/* session check function*/
       function sessionCheck()
       {
           
        if(!(isset($_SESSION['valid_email']) && $_SESSION['valid_email'] != ''))
            {
             $email ="";


            }
        else{
            $email=$_GET['id'];
            $_SESSION['valid_email'] = $email;
            $email=$_SESSION['valid_email'];
            }
           
           return $email;
       }







?>