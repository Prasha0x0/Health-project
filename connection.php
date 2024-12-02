<?php
    $servername="localhost";
    $username="root";
    $password="root";
    $dbname="login";
    $conn=new mysqli($servername,$username,$password,$dbname,3306);
    if($conn->connect_error){
        die("connection Failed".$conn->connect_error);
    }
    echo"";
?>