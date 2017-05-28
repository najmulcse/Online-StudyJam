<?php 

    
    $user='root';
    $pass='';
    $server='localhost';
    $dbname='updatejam';

    $con = new mysqli($server,$user,$pass,$dbname);

    if(!$con)
    {
        die("Database connection failed");
    }

?>