<?php
$id=filter_input(INPUT_POST,"id",FILTER_VALIDATE_INT);
$hospname=$_POST["hospname"];
$docname=$_POST["docname"];
$nursename=$_POST["nursename"];


$host="localhost";
$dbname="myfirstdatabase";
$username="root";
$password=""; 

$conn=mysqli_connect($host,$username,$password,$dbname);

if(mysqli_connect_errno()){
    die("Connection error: " .mysqli_connect_error());
}

 $sql="INSERT INTO patientinfo( id,hospname,docname,nursename)
        VALUES(?,?,?,?)";
    
$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"ssss",
                        $fname,
                        $lname,
                        $add,
                        $email,
                        $pass,
                        $phone,
                        $bdate,
                        $problem
                        );
mysqli_stmt_execute($stmt);
echo"Record saved";
