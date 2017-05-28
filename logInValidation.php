<?php

$user='root';
$pass='';
$server='localhost';
$dbname='myportfolio';

$con=new mysqli($server,$user,$pass,$dbname);

if($con->connect_error)
{
    die("connection failed".$con->connect_error);
    
}
else{
   // echo "Connected";
    if(isset($_POST['login']))
    {
        $user_form= mysqli_real_escape_string($con,$_POST['user']);
        $pass_form= mysqli_real_escape_string($con,$_POST['pass']);
        $sel_user= "select * from login where user='$user_form' and pass='$pass_form' ";
        $run_user= mysqli_query($con,$sel_user);
        $check_user= mysqli_num_rows($run_user);
        if($check_user>0)
        {
            $_SESSION['user']=$user_form;
           
             echo "<script> window.open('studentProfile-default.html','_self') </script>";
            
        }
        else
        {
            echo " <script>alert('Username or Password is not correct,try again later!') </script>";
        }
    }
    
    
    
    
    }

?>