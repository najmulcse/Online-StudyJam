<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Personal skill|Online StudyJam</title>
</head>
<body>
    
</body>
</html>

<?php 


      session_start();
      session_destroy();
      echo "<script> alert('You have successfully logout') </script>";
      echo "<script> window.open('index.php?','_self') </script>";

?>