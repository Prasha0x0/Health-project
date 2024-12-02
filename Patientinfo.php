<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$add=$_POST["add"];
$email=$_POST["email"];
$pass=$_POST["password"];
$phone=filter_input(INPUT_POST,"phone",FILTER_VALIDATE_INT);
$bdate=$_POST["bdate"];
$problem=$_POST["problem"];




$host="localhost";
$dbname="myfirstdatabase";
$username="root";
$password=""; 

$conn=mysqli_connect($host,$username,$password,$dbname);

if(mysqli_connect_errno()){
    die("Connection error: " .mysqli_connect_error());
}

 $sql="INSERT INTO patientinfo( First_name,Last_name,Address,Email,Password,Phone_np,Birthdate,Problem)
        VALUES(?,?,?,?,?,?,?,?)";
    
$stmt=mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"ssssssss",
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
